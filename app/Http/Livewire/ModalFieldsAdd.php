<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ModalFieldsAdd extends Component
{
    protected $listeners = ['showForm' => 'showFormItem'];

    public $title;
    public $type = 'input';
    public $order = 0;
    public $fieldsArr = [];

    public $showMultiFields = false;

    protected $rules = [
        'title' => 'string|required|min:3',
        'type' => 'string|required',
        'order' => 'integer',
    ];
//    protected $messages = [
//        'title.string' => 'Ciąg musi mieć co najmniej 3 znaki',
//        //'fields.*.string' => 'Ciąg musi mieć co najmniej 3 znaki',
//    ];


    public function render()
    {
        return view('livewire.modal-fields-add');
    }

    public function addNewFields()
    {

        $this->validate();
//        try {
//            $this->validate();
//
//            // Другая логика обработки формы, если валидация прошла успешно
//
//        } catch (ValidationException $e) {
//            $errors = $e->validator->errors();
//            // Выводим сообщения об ошибках
//            dd($errors);
//        }

        if(count($this->fieldsArr) > 0)
        {
            $this->validate([
                'fieldsArr.*' => 'required|string|min:3|max:50'
            ]);
        }

//        $this->dispatchBrowserEvent('close-modal');

        $this->emitUp('addNewFields', ['title' => $this->title, 'order' => $this->order, 'type' => $this->type, 'fields' => json_encode($this->fieldsArr)]);
        $this->title = '';
        $this->order = 0;
        $this->type = 'input';
        $this->fieldsArr = [];
        $this->showMultiFields = false;
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
            $this->showMultiFields = true;
        }
        else
        {
            $this->showMultiFields = false;
        }
    }

    public function showAddModal()
    {
        $this->emitTo(ModalFieldsAdd::class, 'showForm');
    }

    private function generateRandomCode($length = 16)
    {
        $bytes = random_bytes($length);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $length);
    }
}
