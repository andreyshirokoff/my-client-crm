<?php

namespace App\Http\Livewire;

use App\Models\ClientService;
use Livewire\Component;

class ClientProcedureIndex extends Component
{
    public $clientId;
    protected $queryString = ['clientId'];
    public $clientServices;

    public function render()
    {
        $this->clientServices = ClientService::where('client_id', $this->clientId)->get();

        return view('livewire.clients.client-procedure-index');
    }
}
