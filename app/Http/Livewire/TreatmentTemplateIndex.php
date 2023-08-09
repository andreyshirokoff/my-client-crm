<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServicesForm;
use App\Models\ServicesTemplate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TreatmentTemplateIndex extends Component
{
    public $serviceTemplates;
    public $selected;
    public function render()
    {
        return view('livewire.settings.treatment-template-index');
    }

    public function submitForm()
    {
        $serviceTemplate = ServicesTemplate::where('id', $this->selected)->first();

        $serviceItem = Service::create([
            'name' => $serviceTemplate->name,
            'group_id' => Auth::user()->group_id,
            'is_med' => $serviceTemplate->is_med,
            'description' => $serviceTemplate->description,
            'description_text' => $serviceTemplate->description_text,
            'contraindications' => $serviceTemplate->contraindications,
            'indicators' => $serviceTemplate->indicators,
            'recommendation' => $serviceTemplate->recommendation,
            'amount' => $serviceTemplate->amount,
        ]);

        if($serviceTemplate->user_card && $serviceItem){
            ServicesForm::create([
                'service_id' => $serviceItem->id,
                'fields' => $serviceTemplate->user_card,
            ]);
        }

        return redirect('/dashboard/ustawienia');
    }

    public function mount()
    {
        $this->serviceTemplates = ServicesTemplate::all();
    }

}
