<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServicesForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TreatmentListIndex extends Component
{
    public $services;
    public $idService;

    public $isAdded = [];

    public function render()
    {
        return view('livewire.settings.treatment-list-index');
    }

    public function mount()
    {
        $this->services = Service::where('group_id', Auth::user()->group_id)->get();




    }

    public function copy($id, $name)
    {
        $originalRecord = Service::find($id);
        $newRecord = $originalRecord->replicate();
        $newRecord->name = $name.' (COPY)';
        $newRecord->save();

        return redirect(request()->header('Referer'));
    }

    public function delete($id)
    {
        $record = Service::find($id);
        $record->delete();

        return redirect(request()->header('Referer'));
    }
}
