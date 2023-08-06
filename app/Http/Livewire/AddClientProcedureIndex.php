<?php

namespace App\Http\Livewire;

use App\Models\ClientNote;
use App\Models\ClientService;
use App\Models\Service;
use Livewire\Component;

class AddClientProcedureIndex extends Component
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
        return view('livewire.add-client-procedure-index');
    }

    public function submitForm()
    {
//        dd($this->arrayToDb);
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;

        $clientNoteCreate = ClientNote::create([
            'client_id' => $this->clientId,
            'service_id' => $this->clientId,
            'note' => json_encode($arrayToDb),
        ]);

        $clientNoteId = $clientNoteCreate->id;

        $service = Service::where('id', $this->serviceId)->first();
        $ClientService = ClientService::create([
            'name' => $service->name,
            'client_id' => $this->clientId,
            'service_id' => $this->serviceId,
            'note_id' => $clientNoteId,
        ]);

        return redirect('dashboard/edit-procedure?clientServiceId='.$ClientService->id);
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
