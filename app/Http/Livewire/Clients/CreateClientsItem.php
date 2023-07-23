<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class CreateClientsItem extends Component
{
    public $client;

    public $typeInfo = '';

    protected $rules = [
        'client.firstname' => 'required|string',
        'client.lastname' => 'required|string',
        'client.email' => 'required|email',
        'client.phone' => 'required|string',
        'typeInfo' => 'nullable|string',
    ];

    public function createClient()
    {
        $this->validate();
        $this->client->fullname = $this->client->firstname . ' '. $this->client->lastname;
        $this->client->group_id = \Auth::user()->group_id;
        $this->client->save();

        if ($this->typeInfo === 'send_via_sms'){

        }

        if ($this->typeInfo === 'send_via_email'){

        }

        $this->client = new Client();
        $this->dispatchBrowserEvent('success-add-client');
    }

    public function mount()
    {
        $this->client = new Client();
    }

    public function render()
    {
        return view('livewire.clients.create-clients-item');
    }
}
