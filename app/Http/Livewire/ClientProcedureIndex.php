<?php

namespace App\Http\Livewire;

use App\Models\ClientService;
use Livewire\Component;

class ClientProcedureIndex extends Component
{
    public $clientId;
    protected $queryString = ['clientId'];
    public $clientServices;
    public $date;

    public function render()
    {
        $this->clientServices = ClientService::where('client_id', $this->clientId)->get();
        foreach($this->clientServices as $cs)
        {
            $cs->formatDate = $this->applyDateFormat($cs->created_at);
        }


        return view('livewire.clients.client-procedure-index');
    }

    private function applyDateFormat($dateString)
    {
        $timestamp = strtotime($dateString);
        return date("Y-m-d", $timestamp);
    }
}
