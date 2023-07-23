<?php

namespace App\Http\Livewire;

use App\Models\GroupTariff;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class YourAccountIndex extends Component
{
    public $user;
    public $maskedPhone;

    public $groupTariff;
    public $activeTo;
    public $remainDays;

    public function render()
    {
        $this->user = Auth::user();
        $this->maskedPhone = $this->applyPhoneMask(Auth::user()->phone);
        $this->groupTariff = GroupTariff::where('owner_id', Auth::user()->id)->first();
        $this->activeTo = $this->applyDateFormat($this->groupTariff->active_to);
        $this->remainDays = $this->getRemain($this->groupTariff->active_to);

        return view('livewire.your-account-index');
    }

    private function applyPhoneMask($phone)
    {
        $phone = trim($phone);
        return substr_replace($phone, ' ', 3, 0);
    }

    private function applyDateFormat($dateString)
    {
        $timestamp = strtotime($dateString);
        return date("Y-m-d", $timestamp);
    }
    private function getRemain($dateString)
    {
        $unixTimestamp = strtotime($dateString);
        $unixCurrent = time();

        $unixRemain = (int)$unixTimestamp - (int)$unixCurrent;

        $days = ceil($unixRemain / 86400);
//        if($days > 30)
//        {
//            $days = 30;
//        }
        return strval($days).' dni';
    }
}
