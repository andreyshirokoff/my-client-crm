<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditAccountIndex extends Component
{
    public ?string $name = '';
    public ?string $lastName = '';
    public ?string $phone = '';

    protected $rules = [
        'fullname' => 'string|min:3|nullable',
        'email' => 'email|nullable',
        'phone' => 'string|min:10|nullable',
    ];
    protected $messages = [
        'fullname.string' => 'its not string',
        'email.email' => 'its not email',
        'phone.string' => 'its not string',
    ];

    public function render()
    {
        return view('livewire.edit-account-index');
    }
}
