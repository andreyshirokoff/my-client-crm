<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\ClientNote;
use App\Models\ClientService;
use App\Models\Service;
use App\Models\ServicesForm;
use App\Models\UserGroup;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $month = strtolower($this->getMonth($request->input('pdf-month')));
        $year = $request->input('pdf-year');
        $date0 = $this->getTwoDates($request->input('pdf-month'), $request->input('pdf-year'))[0];
        $date1 = $this->getTwoDates($request->input('pdf-month'), $request->input('pdf-year'))[1];

        $src = UserGroup::where('id', \Auth::user()->group_id)->first()->logo_path;
        //$img = $_SERVER['DOCUMENT_ROOT'].'/storage/app/logos/'.$src;
        $img = Storage::path('logos/'.$src);


        //$base64 = base64_encode(file_get_contents(Storage::path('logos/'.$src)));
        $extension = pathinfo($img, PATHINFO_EXTENSION);
        $base64 = base64_encode(file_get_contents($img));
        $pathImg = 'data:image/' . $extension . ';base64,' . $base64;

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
            </style>
            <div style="position: relative;">
                <div style="position: absolute;top:20%;text-align:center;width: 100%;">
                    <img src="{$pathImg}" alt="" style="height: 300px;">
                    <h1 style="">Raport o usługach za {$month} {$year} roku</h1>
                </div>
            </div>

HTML;

        $clients = Client::where('group_id', \Auth::user()->group_id)->get();
        foreach($clients as $client)
        {
            $salon = UserGroup::where('id', $client->group_id)->first();

            $services = Service::where('group_id', $client->group_id)->get();
            $serviceData = '';

            $clientServices = ClientService::where('client_id', $client->id)
                ->orderBy('id', 'asc')
                ->whereBetween('created_at', [$date0, $date1])
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
                        $order1 = $order + 1;
                        $td = '<td></td>';
                        if(isset($item['answer']))
                        {
                            $td = '<td>'.$item['answer'].'</td>';
                        }
                        $trs .= <<<HTML
                        <tr>
                            <th scope="row">{$order1}</th>
                            <td>{$item['title']}</td>
                            {$td}
                        </tr>
                        HTML;
                    }

                    if(strlen($trs) > 0)
                    {
                        $serviceData .= <<<HTML
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










//            foreach($services as $service)
//            {
//                $servicesForm = ServicesForm::where('service_id', $service->id)->get();
//                $clientService = ClientService::where('client_id', $client->id)
//                    ->where('service_id', $service->id)
//                    ->whereBetween('created_at', [$date0, $date1])
//                    ->orderBy('id', 'asc')
//                    ->get();
//
//                $formArray = [];
//                foreach($servicesForm as $key0 => $sFrom)
//                {
//                    $fields = json_decode($sFrom->fields, 1);
//
//                    foreach($fields as $key => $field)
//                    {
//
//                        switch($field['type'])
//                        {
//                            case 'input':
//                            case 'textarea':
//                                $formArray[$key]['title'] = $field['title'];
//                                foreach($clientService as $item)
//                                {
//                                    $notes = json_decode(ClientNote::where('id', $item->note_id)->first()->note, 1);
//                                    if(isset($notes[$key0][$key])){
//                                        $formArray[$key]['answer'] = $notes[$key0][$key];
//                                        //dump($notes[$key0][$key]);
//                                    }
//
//
//
//
//                                }
//
//                                break;
//
//                            case 'checkbox':
//                            case 'radio':
//
//                                $formArray[$key]['title'] = $field['title'];
//                                foreach($clientService as $item)
//                                {
//                                    $notesModel = ClientNote::where('id', $item->note_id)->first();
//                                    $notes = json_decode($notesModel->note, 1);
//
//                                    foreach($notes as $note)
//                                    {
//                                        if(isset($note[$key]))
//                                        {
//                                            foreach($note[$key] as $key1 => $item)
//                                            {
//                                                if($item == '1')
//                                                    $formArray[$key]['fields'][$key1] = $field['fields'][$key1];
//                                            }
//                                        }
//                                    }
//                                }
//
//                                break;
//                        }
//                    }
//                }
//                $trs = '';
//                $formArray = array_values($formArray);
//                foreach($formArray as $key => $item)
//                {
//                    $order = $key + 1;
//                    $td = '<td></td>';
//                    if(isset($item['answer']))
//                    {
//                        $td = '<td>'.$item['answer'].'</td>';
//                    }
//                    if(isset($item['fields']))
//                    {
//                        $td = '<td>'.implode(', ', $item['fields']).'</td>';
//                    }
//                    $trs .= <<<HTML
//                        <tr>
//                            <th scope="row">{$order}</th>
//                            <td>{$item['title']}</td>
//                            {$td}
//                        </tr>
//HTML;
//                }
//                if(!strlen($trs) > 0) $trs = '<tr><th></th><td></td><td></td></tr>';
//
//                $serviceData .= <<<HTML
//                    <h3 style="margin-top:5rem"><b>Praca: </b>{$service->name}</h3>
//                    <table class="table">
//                        <thead>
//                        <tr>
//                            <th scope="col">#</th>
//                            <th scope="col">Pytanie</th>
//                            <th scope="col">Odpowiedź</th>
//                        </tr>
//                        </thead>
//                        <tbody>
//                            {$trs}
//                        </tbody>
//                    </table>
//HTML;
//
//            }
            //dd('стоп');
            if(strlen($serviceData) > 0)
            {
                $data .= <<<HTML

                <div class="page-break"></div>
                <div style="margin:10px 15px">
                    <div class="info">
                        <h2>{$client->fullname}</h2>
                        <p><b>Salon: </b>{$salon->name}</p>
                        <p><b>Numer telefonu: </b>{$client->phone}</p>
                    </div>
                    {$serviceData}
                </div>
HTML;
            }


        }


//        $pdf = Pdf::loadView('test_pdf');
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isHTML5ParserEnabled' => true]);
        $pdf = Pdf::loadHTML($data);
        $group = UserGroup::where('id', Auth::user()->group_id)->first();

        return $pdf->download($year.'_'.$month.'_'.$group->name.'_'.'zabiegi'.'.pdf');
    }

    public function getMedCard($data)
    {
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isHTML5ParserEnabled' => true]);
        $pdf = Pdf::loadHTML($data);
        $pdf->download('invoice.pdf');
    }

    protected function getMonth($num)
    {
        $str = '';

        switch ($num)
        {
            case '1':
                $str = 'Styczeń';
                break;
            case '2':
                $str = 'Luty';
                break;
            case '3':
                $str = 'Marzec';
                break;
            case '4':
                $str = 'Kwiecień';
                break;
            case '5':
                $str = 'Maj';
                break;
            case '6':
                $str = 'Czerwiec';
                break;
            case '7':
                $str = 'Lipiec';
                break;
            case '8':
                $str = 'Sierpień';
                break;
            case '9':
                $str = 'Wrzesień';
                break;
            case '10':
                $str = 'Październik';
                break;
            case '11':
                $str = 'Listopad';
                break;
            case '12':
                $str = 'Grudzień';
                break;
            default:
                $str = 'Nieznany miesiąc';
        }

        return $str;
    }

    protected function getTwoDates($month, $year)
    {
        $year1 = $year;
        $month1 = '';
        if($month == '12')
        {
            $month1 = '1';
            $year1 = strval((int)$year + 1);
        }
        else
        {
            $month1 = strval((int)$month + 1);
        }
        if(strlen($month) < 2) $month = '0'.$month;
        if(strlen($month1) < 2) $month1 = '0'.$month1;

        return [date("$year-$month-01"), date("$year1-$month1-01")];
    }
}
