<?php

namespace App\Http\Livewire;

use App\Models\GroupBoot;
use App\Models\ServiceCardForm;
use Livewire\Component;

class CardClientDeleteIndex extends Component
{
    public function render()
    {
        return view('livewire.card-client-delete-index');
    }

    public function submitForm()
    {
        ServiceCardForm::where('group_id', \Auth::user()->group_id)
            ->where('is_active', 1)
            ->update([
                'is_active' => 0
            ]);

        return redirect('/dashboard/ustawienia');
    }
}
