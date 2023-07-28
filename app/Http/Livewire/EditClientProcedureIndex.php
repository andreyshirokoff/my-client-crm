<?php

namespace App\Http\Livewire;

use App\Models\ClientNote;
use Livewire\Component;

class EditClientProcedureIndex extends Component
{
    public $servicesForm;

    public $arrayToDb = [];
    public $serviceId;
    public $clientId;
    public $queryString = ['serviceId', 'clientId'];
    public function render()
    {
        $this->servicesForm = \App\Models\ServicesForm::where('service_id', $this->serviceId)->get();
        //dd($this->servicesForm);
        return view('livewire.edit-client-procedure-index');
    }

    public function submitForm()
    {
//        dd($this->arrayToDb);
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;
        $resultToDb = [];

        foreach($arrayToDb as $key => $item)
        {

            foreach($item as $keyS => $itemS)
            {
                $row = json_decode($serviceForm[$key]['fields'], 1)[$keyS];
                $resultToDb[$key][$keyS] = [
                    'type' => $row['type'],
                    'title' => $row['title'],
                    'order' => $row['order'],
                ];
                //dd($row);

                if(is_array($itemS))
                {
                    $resultToDb[$key][$keyS]['fields'] =  $arrayToDb[$key][$keyS];
                    foreach($resultToDb[$key][$keyS]['fields'] as $keyff => $itemff)
                    {
                        $resultToDb[$key][$keyS]['fields'][$keyff] = [
                            'title' => $row['fields'][$keyff],
                            'value' => $itemff,
                        ];
                    }
                }
                else
                {
                    $row = json_decode($serviceForm[$key]['fields'], 1)[$keyS];
                    $resultToDb[$key][$keyS] = [
                        'type' => $row['type'],
                        'title' => $row['title'],
                        'order' => $row['order'],
                        'value' => $arrayToDb[$key][$keyS],
                    ];
                }
            }
        }
        //dd(json_encode($resultToDb));        //$resultToDbJson = json_encode($resultToDb);

//         ClientNote::where('client_id', $this->clientId)->get();
//            ->where('client_id', $this->clientId)

        ClientNote::where('service_id', $this->serviceId)
            ->where('client_id', $this->clientId)
            ->update([
                'note' => json_encode($resultToDb),
            ]);

        return redirect(request()->header('Referer'));
    }


//    public function updateArray($key, $value, $keyf = 0)
//    {
//
//        foreach($arrayToDb as $key => $item)
//        {
//            if(!is_array($item))
//            {
//                dd($this->servicesForm->toArray());
//            }
//        }
//
//        $this->arrayToDb = $arrayToDb;
//    }




}
