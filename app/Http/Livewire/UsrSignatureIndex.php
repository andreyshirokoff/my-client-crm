<?php

namespace App\Http\Livewire;

use App\Models\GroupTariff;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsrSignatureIndex extends Component
{
    public $image;
    public function render()
    {
        $this->image = 'storage/sign/'.GroupTariff::where('owner_id', Auth::user()->id)->first()->sign_path;

        return view('livewire.usr-signature-index');
    }


}
