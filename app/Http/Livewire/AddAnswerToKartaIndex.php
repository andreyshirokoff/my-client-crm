<?php

namespace App\Http\Livewire;

use App\Models\ClientCardInfo;
use App\Models\ServiceCardForm;
use Livewire\Component;

class AddAnswerToKartaIndex extends Component
{
    public $servicesForm;

    public $arrayToDb = [];
    public $groupId;
    public $clientId;
    public $queryString = ['groupId', 'clientId'];
    public function render()
    {

        $clientService = ClientCardInfo::where('client_id', $this->clientId)->first();
        $this->servicesForm = \App\Models\ServiceCardForm::where('group_id', $this->groupId)
            ->where('is_active', 1)
            ->get();
        //$serviceForm = $this->servicesForm->toArray();

        //$arrayFromDb = json_decode($clientService->fields);
        //$note = ClientNote::where('id', $clientService->note_id)->first();

        $arrayFromDb = json_decode($clientService->fields,1);

        $this->arrayToDb = $arrayFromDb;

        //$this->servicesForm = \App\Models\ServiceCardForm::where('group_id', $this->groupId)->get();
//        dd($this->servicesForm);
        return view('livewire.add-answer-to-karta-index');
    }

    public function submitForm()
    {
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;
        //dd($arrayToDb);
        $resultToDb = [];

//        $clientNoteCreate = ClientCardInfo::create([
//            'client_id' => $this->clientId,
//            'service_id' => $this->clientId,
//            'note' => json_encode($arrayToDb),
//        ]);

//        $clientNoteId = $clientNoteCreate->id;

        //$service = Service::where('id', $this->serviceId)->first();
        $cardForm = ServiceCardForm::where('is_active', 1)->first();
        $ClientService = ClientCardInfo::firstOrNew([
            'client_id' => $this->clientId,
            'is_active' => 1,
//            'group_id' => $this->groupId,
//            'fields' => json_encode($arrayToDb),
        ]);
        $ClientService->group_id = $this->groupId;
        $ClientService->form_id = $cardForm->id;
        $ClientService->fields = json_encode($arrayToDb);
        $ClientService->save();

        //return redirect(request()->header('Referer'));
        return redirect('dashboard/clients?clientId='.$ClientService->id);
    }
}
