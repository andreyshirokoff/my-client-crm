<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientNotatkaIndex extends Component
{
    public $queryString = ['clientId'];
    public ?string $note = '';
    public $clientId;
    public function render()
    {
        $this->note = Client::where('id', $_GET['clientId'])->first()->description;
        return view('livewire.client-notatka-index');
    }

    public function submitForm()
    {
        Client::where('id', $this->clientId)->update([
            'description' => $this->note
        ]);

        return redirect(request()->header('Referer'));
    }
}
