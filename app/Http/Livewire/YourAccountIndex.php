<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class YourAccountIndex extends Component
{
    public $user;
    public $maskedPhone;
    public function render()
    {
        $this->user = Auth::user();
        $this->maskedPhone = $this->applyPhoneMask(Auth::user()->phone);

        return view('livewire.your-account-index');
    }

    private function applyPhoneMask($phone)
    {
        $phone = trim($phone);
        return substr_replace($phone, ' ', 3, 0);
    }
}
