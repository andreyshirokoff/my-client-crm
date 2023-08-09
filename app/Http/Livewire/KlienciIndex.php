<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class KlienciIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    //public $clients;
    public bool $show = false;

//    public function mount(int $id)
//    {
//        $this->clientId = $id;
//        $this->client = Client::find($id);
//    }
    public function showsPhone()
    {
        $this->show = true;
    }
    public function render()
    {
        return view('livewire.klienci-index', [
            'clients' => Client::paginate(5)
        ]);
    }
}
