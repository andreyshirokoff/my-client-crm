<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class TreatmentCreateIndex extends Component
{

    public $name;
    public $wireIsMed;
    public $wireDesc;
    public $wireInd;
    public $wireRec;
    public $wireCont;
    public $wireCount;

//    protected $rules = [
//        'title' => 'min:3'
//    ];

    public function render()
    {
        return view('livewire.settings.treatment-create-index');
    }

    public function mount()
    {
        if(isset($_GET['type']))
        {
            if($_GET['type'] == 'edit')
            {
                $services = Service::where('id', $_GET['id'])->first();
                $this->name = $services->name;
                $this->wireIsMed = $services->is_med;
                $this->wireDesc = $services->description;
                $this->wireInd = $services->indicators;
                $this->wireRec = $services->recommendation;
                $this->wireCont = $services->contradation;
                $this->wireCount = $services->amount;

            }
        }


    }
}
