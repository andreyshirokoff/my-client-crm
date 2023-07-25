<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TreatmentListIndex extends Component
{
    public $services;
    public function render()
    {
        return view('livewire.settings.treatment-list-index');
    }

    public function mount()
    {
        $this->services = Service::where('group_id', Auth::user()->group_id)->get();
    }
}
