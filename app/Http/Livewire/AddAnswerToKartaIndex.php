<?php

namespace App\Http\Livewire;

use App\Http\Controllers\PdfController;
use App\Models\Client;
use App\Models\ClientCardInfo;
use App\Models\ClientNote;
use App\Models\ClientService;
use App\Models\Service;
use App\Models\ServiceCardForm;
use App\Models\ServicesForm;
use App\Models\UserGroup;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddAnswerToKartaIndex extends Component
{
    public $servicesForm;

    public $arrayToDb = [];
    public $groupId;
    public $clientId;
    public $queryString = ['groupId', 'clientId'];

    public $isCard = false;
    public function render()
    {

        $clientService = ClientCardInfo::where('client_id', $this->clientId)->first();
        $this->servicesForm = \App\Models\ServiceCardForm::where('group_id', $this->groupId)
            ->where('is_active', 1)
            ->get();
        $arrayFromDb = [];
        if($clientService)
        {
            if($clientService->fields)
            {
                $arrayFromDb = json_decode($clientService->fields,1);
            }
        }

        $this->arrayToDb = $arrayFromDb;

        if($clientService) $this->isCard = true;



        return view('livewire.add-answer-to-karta-index');
    }

    public function submitForm()
    {
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;
        if(count($arrayToDb) > 0)
        {
            foreach($arrayToDb as $key0 => $arrayTo)
            {
                foreach($arrayTo as $key => $to)
                {
                    foreach($serviceForm as $item)
                    {
                        $fields = json_decode($item['fields'],1);
                        if(isset($fields[$key]))
                        {
                            if($fields[$key]['type'] == 'radio')
                            {
                                if(count($arrayToDb[$key0][$key]) > 0) $arrayToDb[$key0][$key] = array_slice($arrayToDb[$key0][$key], -1);
                            }
                        }
                    }
                }
            }
        }
        $cardForm = ServiceCardForm::where('is_active', 1)->first();
        $ClientService = ClientCardInfo::firstOrNew([
            'client_id' => $this->clientId,
            'is_active' => 1,
//            'group_id' => $this->groupId,
//            'fields' => json_encode($arrayToDb),
        ]);
        $ClientService->group_id = $this->groupId;
        //$ClientService->form_id = $cardForm->id;
        //dd($arrayToDb);
        $ClientService->fields = json_encode($arrayToDb);
        $ClientService->save();

        //return redirect(request()->header('Referer'));
        return redirect('dashboard/clients?clientId='.$this->clientId);
    }

    public function downloadPdf()
    {
        $client = Client::where('id', $this->clientId)->first();
        $infos = json_decode(ClientCardInfo::where('client_id', $this->clientId)->first()->fields,1);
        $formArray = [];

        $data = <<<HTML
            <meta charset="utf-8">
            <style>
                @font-face {
                  font-family: 'Montserrat', sans-serif;
                  font-style: normal;
                  font-weight: normal;
                  src: url(https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap) format('truetype');
                }
                *{
                    /*font-family: 'Montserrat', sans-serif;*/
                    font-family: 'DejaVu Sans', sans-serif;
                }
                .page-break {
                    page-break-after: always;
                }
                .table {
                  border-collapse: collapse; /* Объединение границ ячеек */
                  width: 100%; /* Ширина таблицы */
                  border: 2px solid #000; /* Граница вокруг всей таблицы */
                }

                .table th, .table td {
                  border: 1px solid #000; /* Граница ячеек */
                  padding: 8px; /* Отступ внутри ячеек */
                }

                h1, h2{
                    width: 100%;
                    text-align: center;
                }
            </style>
            <div style="width: 100%">
                <h1>WYWIAD MEDYCZNY PACJENTA</h1>
                <div class="req">
                    <p><b>Nazwisko:</b> {$client->lastname}</p>
                    <p><b>Imię:</b> {$client->firstname}</p>
                    <p><b>Data urodzenia:</b> {$this->applyDateFormat($client->date_birth)}</p>
                    <p><b>Telefon kontaktowy:</b> {$client->phone}</p>
                </div>

            </div>

HTML;

        foreach($this->servicesForm as $row)
        {
            $forms = json_decode($row->fields,1);
            foreach($forms as $key => $form)
            {
                foreach($infos as $info)
                {
                    if(isset($info[$key]))
                    {
                        switch($form['type'])
                        {
                            case 'input':
                            case 'textarea':
                                $formArray[$key]['title'] = $form['title'];
                                $formArray[$key]['answer'] = $info[$key];

                                break;

                            case 'checkbox':
                            case 'radio':
                                $formArray[$key]['title'] = $form['title'];
                                $answerArray = [];
                                foreach($info[$key] as $key1 => $item)
                                {
                                    if(isset($info[$key][$key1]) && $info[$key][$key1] !== false)
                                    {
                                        $answerArray[] = $form['fields'][$key1];
                                    }
                                }
                                $formArray[$key]['answer'] = implode(', ', $answerArray);

                                break;
                        }
                    }
                }
            }


        }

        $placeName = UserGroup::where('id', Auth::user()->group_id)->first()->name;
        $curDate = date('d.m.Y');

        $trs = '';
        $formArray = array_values($formArray);
        foreach($formArray as $key => $item)
        {
            $order = $key + 1;
            $td = '<td></td>';
            if(isset($item['answer']))
            {
                $td = '<td>'.$item['answer'].'</td>';
            }
//            if(isset($item['fields']))
//            {
//                $td = '<td>'.implode(', ', $item['fields']).'</td>';
//            }
            $trs .= <<<HTML
                        <tr>
                            <th scope="row">{$order}</th>
                            <td>{$item['title']}</td>
                            {$td}
                        </tr>
HTML;
        }
        if(!strlen($trs) > 0) $trs = '<tr><th></th><td></td><td></td></tr>';

        $data .= <<<HTML
            <table class="table" style="margin-top: 50px">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pytanie</th>
                    <th scope="col">Odpowiedź</th>
                </tr>
                </thead>
                <tbody>
                    {$trs}
                </tbody>
            </table>
HTML;
        $data .= <<<HTML
            <p><b>Czytelny podpis Pacjenta: </b><img src="{$client->sign_base_64}" alt="" style="height: 100px;position:relative;top:40px"></p>
            <p><b>Miejscowość i data: </b>{$placeName}, {$curDate}</p>
HTML;


        $data .= <<<HTML
            <h2 style="margin-top: 50px">Oświadczenie Pacjenta</h2>
            <p>Ja niżej podpisana/y oświadczam, że zostałam/em w pełni poinformowana/y przez gabinet o procedurze zabiegu, wszystkich czynnościach z nim związanych, korzyściach oraz ewentualnych skutkach ubocznych. Miałam/em możliwość zadawania pytań dotyczących wszystkich aspektów zabiegu, możliwych komplikacji, ryzyka powikłań oraz zaleceń po wykonaniu zabiegu depilacji laserowej, w tym wskazań dotyczących pielęgnacji skóry, zaś odpowiedzi były dla mnie zrozumiałe i udzielone w sposób wyczerpujący.</p>
            <p>Oświadczam, że przed wykonaniem zabiegu udzieliłam/em pełnych oraz prawdziwych informacji dotyczących stanu mojego zdrowia, o przebytych, leczonych i nieleczonych chorobach, schorzeniach oraz wszelkich innych dolegliwościach, w tym o znanych mi uczuleniach, alergiach oraz wszelkich przebytych operacjach i zabiegach, którym zostałam/em poddana/y w przeszłości, jak również wszelkich innych informacji zawartych w niniejszym wywiadzie medycznym. Ponadto oświadczam, iż udzieliłam/em wyczerpujących informacji o przyjmowanych przeze mnie lekach, suplementach diety, produktach i substancjach fotoaktywnych oraz o stosowanych kosmetykach. Jednocześnie oświadczam, iż odbyłam/em wszelkie niezbędne konsultacje oraz uzyskałam/em wszelkie niezbędne zaświadczenia, zgody oraz pozwolenia lekarskie (w formie pisemnej i ustnej) do przeprowadzenia zabiegów kosmetycznych i odchudzających. Oświadczam również, że zobowiązuję się do przestrzegania wszelkich zaleceń , w tym do zaleceń przed i po dokonaniem zabiegu, które zostały lub zostaną mi przedstawione (w formie ustnej lub pisemnej). Oświadczam, że zostałam/em poinformowana/y o wszelkich negatywnych następstwach i powikłaniach mogących wystąpić w związku ze niezastosowaniem się do w/w zaleceń. Oświadczam, iż jestem w pełni świadoma/y mojego stanu zdrowia oraz oświadczam, iż prowadzący Salon ani Kosmetolog (osoba wykonująca zabieg) nie ponosi odpowiedzialności za moje zaniedbania wynikające z nieprzestrzegania powyższych zasad oraz zaleceń.</p>
            <p>Oświadczam, że podane przeze mnie nieprawdy w niniejszym wywiadzie medycznym zwalnia Salon oraz Kosmetologa (osobę wykonującą zabieg) z odpowiedzialności za szkody związane ze skutkami zabiegu, w tym wynikające z podania w wywiadzie nieprawdy.</p>
HTML;
        $data .= <<<HTML
            <p><b>Czytelny podpis Pacjenta: </b><img src="{$client->sign_base_64}" alt="" style="height: 100px;position:relative;top:40px"></p>
            <p><b>Miejscowość i data: </b>{$placeName}, {$curDate}</p>
HTML;

        $data .= '<h2 style="margin-top: 50px">Karta zabiegow</h2>';
        $data .= $this->getZabieg();

        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isHTML5ParserEnabled' => true]);
        $pdf = Pdf::loadHTML($data)->output();

        return response()->streamDownload(
            fn () => print($pdf),
            date('Y_m_d').'_'.$client->firstname.'_'.$client->lastname.'_'.'med_card'.'.pdf',
        );
    }

    protected function applyDateFormat($dateString)
    {
        $timestamp = strtotime($dateString);
        return date("d.m.Y", $timestamp);
    }

    protected function getZabieg()
    {
        $client = Client::where('id', $this->clientId)
            ->first();
        $data = '';


        //$salon = UserGroup::where('id', $client->group_id)->first();


        $clientServices = ClientService::where('client_id', $client->id)
            ->orderBy('id', 'desc')
            ->get();

        foreach($clientServices as $clientService)
        {
            $formArray = [];
            $service = Service::where('id', $clientService->service_id)->first();

            $noteses = json_decode(ClientNote::where('id', $clientService->note_id)->first()->note,1);
            if(count($noteses) > 0)
            {
                foreach($noteses as $notes)
                {
                    foreach($notes as $key => $note)
                    {
                        $servicesForms = ServicesForm::where('service_id', $clientService->service_id)->get();
                        foreach($servicesForms as $servicesForm)
                        {
                            $servicesForm = json_decode($servicesForm->fields,1);
                            if(isset($servicesForm[$key]))
                            {


                                switch($servicesForm[$key]['type'])
                                {
                                    case 'input':
                                    case 'textarea':
                                        $formArray[$key]['title'] = $servicesForm[$key]['title'];
                                        $formArray[$key]['answer'] = $note;

                                        break;

                                    case 'checkbox':
                                    case 'radio':

                                        $formArray[$key]['title'] = $servicesForm[$key]['title'];
                                        $answerArray = [];
                                        foreach($note as $key1 => $item)
                                        {
                                            if(isset($servicesForm[$key]['fields'][$key1]))
                                            {
                                                $answerArray[] = $servicesForm[$key]['fields'][$key1];
                                            }
                                        }
                                        $formArray[$key]['answer'] = implode(', ', $answerArray);

                                        break;
                                }
                            }
                        }

                    }

                }
            }


            if(count($formArray) > 0)
            {
                $formArray = array_values($formArray);
                $trs = '';
                foreach ($formArray as $order => $item)
                {
                    $td = '<td></td>';
                    if(isset($item['answer']))
                    {
                        $td = '<td>'.$item['answer'].'</td>';
                    }
                    $trs .= <<<HTML
                        <tr>
                            <th scope="row">{$order}</th>
                            <td>{$item['title']}</td>
                            {$td}
                        </tr>
                        HTML;
                }

                if(strlen($trs) > 0)
                {
                    $data .= <<<HTML
                    <h3><b>Praca: </b>{$service->name}, <b>Data: </b>{$clientService->created_at}</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pytanie</th>
                            <th scope="col">Odpowiedź</th>
                        </tr>
                        </thead>
                        <tbody>
                            {$trs}
                        </tbody>
                    </table>
HTML;
                }
            }

        }

        return $data;
    }
}
