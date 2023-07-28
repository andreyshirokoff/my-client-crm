<?php

namespace App\Http\Livewire;

use App\Models\ClientNote;
use App\Models\ClientService;
use Livewire\Component;

class EditClientProcedureIndex extends Component
{
    public $servicesForm;
    public $queryString = ['clientServiceId'];
    public $arrayToDb = [];
    public $clientServiceId;




    public function render()
    {
        $clientService = ClientService::where('id', $this->clientServiceId)->first();
        $this->servicesForm = \App\Models\ServicesForm::where('service_id', $clientService->service_id)->get();
        dd($this->servicesForm);
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


        return view('livewire.edit-client-procedure-index');
    }
}
