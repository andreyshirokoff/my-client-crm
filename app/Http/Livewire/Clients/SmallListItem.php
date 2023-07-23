<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class SmallListItem extends Component
{
    public $client;
    public bool $show = false;

    public function mount(int $id)
    {
        $this->client = Client::find($id);
    }

    public function showsPhone()
    {
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.clients.small-list-item');
    }
}
