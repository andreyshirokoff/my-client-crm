<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class TreatmentQuestionIndex extends Component
{
    public ?string $field = '';
    public $fieldsArr = [];

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
                $fields[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                ];
                break;

            case 'textarea':
                $fields[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                ];
                break;

            case 'checkbox':
                $fields[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                ];
                break;

            case 'radio':
                $fields[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                ];
                break;
        }

        usort($fields, function ($a, $b) {
            return $b['order'] - $a['order'];
        });

        $this->field = json_encode($fields);
        $this->fieldsArr = $fields;
    }



    public function showAddModal()
    {
        $this->dispatchBrowserEvent('event-add-field');
        //$this->emitTo(ModalFieldsAdd::class, 'showForm');
    }
}
