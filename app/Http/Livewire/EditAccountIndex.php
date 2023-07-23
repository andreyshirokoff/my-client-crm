<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditAccountIndex extends Component
{
    public ?string $name = '';
    public ?string $lastName = '';
    public ?string $phone = '';

    protected $rules = [
        'name' => 'string|min:3|nullable',
        'lastName' => 'string|min:3|nullable',
        'phone' => 'string|min:10|nullable',
    ];
    protected $messages = [
        'name.string' => 'its not string',
        'lastName.string' => 'its not string',
        'phone.string' => 'its not string',
    ];

    public function render()
    {
        return view('livewire.edit-account-index');
    }

    public function mount()
    {
        $this->themeSelect();

    }

    public function themeSelect()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->lastName = $user->last_name;
        $this->phone = $user->phone;
    }
}
