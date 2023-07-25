<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class TreatmentListIndex extends Component
{
    public $title = '';
    public $description = '';
    public $contraindications = '';
    public $indications = '';
    public $recommendations = '';
    public $amount;
    public function render()
    {
        return view('livewire.settings.treatment-list-index');
    }

    public function mount()
    {
        $services = Service::create([

        ]);


    }
}
