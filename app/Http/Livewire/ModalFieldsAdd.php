<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalFieldsAdd extends Component
{
    protected $listeners = ['showForm' => 'showFormItem'];

    public $name;
    public $type = 'input';
    public $order;
    public $fieldsArr = [];

    public $showMultiFields = false;

    protected $rules = [
        'name' => 'string|required',
        'type' => 'string|required',
        'order' => 'integer',
    ];


    public function render()
    {
        return view('livewire.modal-fields-add');
    }

    public function showFormItem()
    {
        $this->dispatchBrowserEvent('event-add-field');
    }

    public function addNewFields()
    {
        dd($this->fieldsArr);
        $this->validate();

        $this->emitUp('addNewFields', ['name' => $this->name, 'order' => $this->order, 'type' => $this->type, 'fields' => json_encode($this->fieldsArr)]);
        $this->name = '';
        $this->order = 0;
        $this->type = 'input';
    }

    public function addMultiFields()
    {
        $key = uniqid();

        $this->fieldsArr[$key] = '';
    }

    public function updateMultiFieldsValue($key, $value)
    {
        $this->fieldsArr[$key] = $value;
    }

    public function updatedTypeOfField()
    {
        if($this->type == 'radio' || $this->type == 'checkbox')
        {
            $this->showMultiFields = true;
        }
        else
        {
            $this->showMultiFields = false;
        }
    }
}
