<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\ClientNote;
use App\Models\ClientService;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddClientProcedureIndex extends Component
{
    protected $listeners = ['submit' => 'submit'];
    public $servicesForm;

    public $arrayToDb = [];
    public $serviceId;
    public $clientId;
    public $queryString = ['serviceId', 'clientId'];
    public $signPath;
    public function render()
    {
        $this->servicesForm = \App\Models\ServicesForm::where('service_id', $this->serviceId)->get();
        $this->signPath = Client::where('id', $this->clientId)->first()->sign_path;

        return view('livewire.add-client-procedure-index');
    }

    public function submit()
    {
        $serviceForm = $this->servicesForm->toArray();
        $arrayToDb = $this->arrayToDb;

        $clientNoteCreate = ClientNote::create([
            'client_id' => $this->clientId,
            'service_id' => $this->clientId,
            'group_id' => \Auth::user()->group_id,
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

        $decode = $this->base64ToImage($this->signPath);
        $fileName = $this->generateRandomCode().'.jpg';
        Storage::put('/storage/sign/'.$fileName, $decode);
        Client::where('id', $this->clientId)->update([
            'sign_path' => $fileName,
            'sign_base_64' => $this->signPath,

        ]);

        return redirect('dashboard/edit-procedure?clientServiceId='.$ClientService->id.'&clientId='.$this->clientId);
    }
    private function generateRandomCode($length = 16)
    {
        $bytes = random_bytes($length);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $length);
    }
    private function base64ToImage($base64String)
    {
        // Удаляем возможные префиксы base64, если они есть
        $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $base64String);

        // Преобразуем base64 в бинарные данные
        $imageData = base64_decode($base64String);
        return $imageData;
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
