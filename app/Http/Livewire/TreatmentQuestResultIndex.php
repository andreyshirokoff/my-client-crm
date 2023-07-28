<?php

namespace App\Http\Livewire;

use App\Models\ServicesForm;
use Livewire\Component;

class TreatmentQuestResultIndex extends Component
{
    public $idservice;
    public $fieldsArrs = [];

    public $queryString = ['idservice'];
    public function render()
    {
        return view('livewire.settings.treatment-quest-result-index');
    }

    public function mount()
    {
        $ServicesForm = ServicesForm::where('service_id', $this->idservice)->get();
        $this->fieldsArrs = $ServicesForm->pluck('fields')->toArray();
    }
}
