<?php

namespace App\Http\Livewire;

use App\Models\InformationGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryIndex extends Component
{
    public $infoGroup;
    public function render()
    {
        $this->infoGroup = InformationGroup::where('user_id', Auth::user()->id)
            ->orderByDesc('id')
            ->take(10)
            ->first();
        return view('livewire.history-index');
    }
}
