<?php

namespace App\Http\Livewire;

use App\Models\ServicesForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class TreatmentQuestionIndex extends Component
{
    public $idservice;
    protected $queryString = ['idservice'];

    //public $idService;

    public ?string $field = '';
    public $fieldsArr = [];

    public $returnFields = [];

    public $rules = [
        'field' => 'required|min:10'
    ];

    public $type;
    public $title;
    public $order;

    protected $listeners = ['addNewFields' => 'addNewFields'];

    public function render()
    {

        return view('livewire.settings.treatment-question-index');
    }

    public function submitForm()
    {
        $ServicesFormSave = ServicesForm::firstOrNew([
            'service_id' => $this->idservice,
            'fields' => json_encode($this->fieldsArr),
        ]);
        $ServicesFormSave->save();
        return redirect(request()->header('Referer'));
    }

//    public function showFormItem()
//    {
//        $this->dispatchBrowserEvent('event-add-field');
//    }

    public function addNewFields($props)
    {
        $type = $props['type'];
        $title = $props['title'];
        $order = (int)$props['order'];
        //dd($order);

        $key = uniqid();
        $fields1 = [];
        if(isset($props['fields'])) $fields1 = json_decode($props['fields'], 1);

        switch($type)
        {
            case 'input':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                ];
                break;

            case 'textarea':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                ];
                break;

            case 'checkbox':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                ];
                break;

            case 'radio':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                ];
                break;
        }

        uasort($this->fieldsArr, function ($a, $b) {
            return $b['order'] - $a['order'];
        });


        $this->field = json_encode($this->fieldsArr);
//        $this->fieldsArr = $fields;
    }



    public function showAddModal()
    {
        $this->dispatchBrowserEvent('event-add-field');
        //$this->emitTo(ModalFieldsAdd::class, 'showForm');
    }

    public function mount()
    {
        $ServicesForm = ServicesForm::where('service_id', $this->idservice)->get();
        $this->returnFields = $ServicesForm->pluck('fields')->toArray();
    }
}
