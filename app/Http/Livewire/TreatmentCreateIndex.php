<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TreatmentCreateIndex extends Component
{
    public $title = '';
    public $description = '';
    public $contraindications = '';
    public $indications = '';
    public $recommendations = '';
    public $amount;
    public function render()
    {
        return view('livewire.treatment-create-index');
    }

    public function mount()
    {

    }
}
