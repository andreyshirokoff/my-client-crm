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
    public $name;
    public $order;

    protected $listeners = ['addNewFields' => 'addNewFields'];

    public function render()
    {

        return view('livewire.settings.treatment-question-index');
    }

    public function addNewFields($props)
    {
        $type = $props['type'];
        $name = $props['name'];
        $order = $props['order'];

        $key = uniqid();
        $fields = json_decode($this->field, 1);
        switch($type)
        {
            case 'input':
                $fields[$key] = [
                    'type' => $type,
                    'name' => $name,
                    'order' => $order,
                ];
                break;

            case 'textarea':
                $fields[$key] = [
                    'type' => $type,
                    'name' => $name,
                    'order' => $order,
                ];
                break;

            case 'checkbox':
                $fields[$key] = [
                    'type' => $type,
                    'name' => 'test',
                    'order' => 0,
                ];
                break;

            case 'radio':
                $fields[$key] = [
                    'type' => $type,
                    'name' => 'test',
                    'order' => 0,
                ];
                break;
        }

        $this->field = json_encode($fields);
        $this->fieldsArr = $fields;
    }

    public function showAddModal()
    {
        $this->emitTo(ModalFieldsAdd::class, 'showForm');
    }
}
