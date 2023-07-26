<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalFieldsAdd extends Component
{
    protected $listeners = ['showForm' => 'showFormItem'];

    public $title;
    public $type = 'input';
    public $order;
    public $fieldsArr = [];

    public $showMultiFields = 'false';

    protected $rules = [
        'title' => 'string|required',
        'type' => 'string|required',
        'order' => 'integer',
    ];


    public function render()
    {
        return view('livewire.modal-fields-add');
    }

    public function addNewFields()
    {
        $this->validate();

        $this->emitUp('addNewFields', ['title' => $this->title, 'order' => $this->order, 'type' => $this->type, 'fields' => json_encode($this->fieldsArr)]);
        $this->title = '';
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

    public function setField()
    {
        $this->dispatchBrowserEvent('event-add-field');
    }
    public function updatedType()
    {
        if($this->type == 'radio' || $this->type == 'checkbox')
        {
            $this->showMultiFields = 'true';
        }
        else
        {
            $this->showMultiFields = 'false';
        }
    }

    public function showAddModal()
    {
        $this->emitTo(ModalFieldsAdd::class, 'showForm');
    }
}
