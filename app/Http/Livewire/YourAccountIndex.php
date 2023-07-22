<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class YourAccountIndex extends Component
{
    public $user;
    //public $maskedPhone;
    public function render()
    {
        $this->user = Auth::user();
        //$this->maskedPhone = $this->applyPhoneMask(Auth::user()->phone);

        return view('livewire.your-account-index');
    }

    private function applyPhoneMask($phone)
    {
        $phone = trim($phone);
        $mask = "+XX XXXXXXXXXX";

        $mask = str_replace(' ', '', $mask);

        $result = '';
        $index = 0;
        for ($i = 0; $i < strlen($mask); $i++) {
            if ($mask[$i] === 'X') {
                $result .= $phone[$index];
                $index++;
            } else {
                $result .= $mask[$i];
            }
        }

        return $result;
    }
}
