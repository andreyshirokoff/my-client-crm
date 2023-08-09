<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\ClientNote;
use App\Models\ClientService;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditClientProcedureIndex extends Component
{
    public $servicesForm;
    public $queryString = ['clientServiceId', 'clientId'];
    public $arrayToDb = [];
    public $clientServiceId;

    public $clientId;
    public $signPath;





    public function render()
    {
        $clientService = ClientService::where('id', $this->clientServiceId)->first();
        $this->servicesForm = \App\Models\ServicesForm::where('service_id', $clientService->service_id)->get();

        //$arrayFromDb = json_decode($clientService->fields);
        $note = ClientNote::where('id', $clientService->note_id)->first();
        $arrayFromDb = json_decode($note->note,1);
        $this->arrayToDb = $arrayFromDb;

//        foreach($arrayFromDb as $key => $item)
//        {
//            foreach($item as $keyS => $itemS)
//            {
//                $row = json_decode($serviceForm[$key]['fields'], 1)[$keyS];
//                $resultToDb[$key][$keyS] = [
//                    'type' => $row['type'],
//                    'title' => $row['title'],
//                    'order' => $row['order'],
//                ];
//                //dd($row);
//
//                if(is_array($itemS))
//                {
//                    $resultToDb[$key][$keyS]['fields'] =  $arrayToDb[$key][$keyS];
//                    foreach($resultToDb[$key][$keyS]['fields'] as $keyff => $itemff)
//                    {
//                        $resultToDb[$key][$keyS]['fields'][$keyff] = [
//                            'title' => $row['fields'][$keyff],
//                            'value' => $itemff,
//                        ];
//                    }
//                }
//                else
//                {
//                    $row = json_decode($serviceForm[$key]['fields'], 1)[$keyS];
//                    $resultToDb[$key][$keyS] = [
//                        'type' => $row['type'],
//                        'title' => $row['title'],
//                        'order' => $row['order'],
//                        'value' => $arrayToDb[$key][$keyS],
//                    ];
//                }
//            }
//        }

        $this->signPath = Client::where('id', $this->clientId)->first()->sign_path;


        return view('livewire.edit-client-procedure-index');
    }

    public function submit()
    {
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;

        $serviceNoteId = ClientService::where('id', $this->clientServiceId)->first()->note_id;

        $clientNoteCreate = ClientNote::where('id', $serviceNoteId)->update([
//            'client_id' => $this->clientId,
//            'service_id' => $this->clientId,
//            'group_id' => \Auth::user()->group_id,
            'note' => json_encode($arrayToDb),
        ]);

//        $clientNoteId = $clientNoteCreate->id;
//
//        $service = Service::where('id', $this->serviceId)->first();
//        $ClientService = ClientService::where('id', $this->clientServiceId)->update([
//            'name' => $service->name,
//            'client_id' => $this->clientId,
//            'service_id' => $this->serviceId,
//            'note_id' => $clientNoteId,
//        ]);

        return redirect('dashboard/edit-procedure?clientServiceId='.$this->clientServiceId.'&clientId='.$this->clientId);
    }
}
