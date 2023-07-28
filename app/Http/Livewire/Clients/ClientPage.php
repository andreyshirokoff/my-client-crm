<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class ClientPage extends Component
{
    public $client;
    public $clientId;
    protected $queryString = ['clientId'];
    public $maskedPhone;
    //public $image;
    public function render()
    {
        $this->client = Client::where('id', $this->clientId)->first();
        $this->maskedPhone = $this->applyPhoneMask($this->client->phone);

        return view('livewire.clients.client-page');
    }

    private function applyPhoneMask($phone)
    {
        $phone = trim($phone);
        return substr_replace($phone, ' ', 3, 0);
    }
}
