<?php

namespace App\Http\Livewire;

use App\Models\InformationGroup;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryIndex extends Component
{
    public $infoGroup;
    public function render()
    {
        $this->infoGroup = InformationGroup::where('user_id', Auth::user()->id)
            ->where('is_archive', '0')
            ->orderByDesc('id')
            ->take(10)
            ->get();

        foreach ($this->infoGroup as $key => $item)
        {
            $this->infoGroup[$key]->date = $this->applyDateFormat($item->created_at);
            $this->infoGroup[$key]->phone = Auth::user()->phone;
            $this->infoGroup[$key]->sms_count = UserGroup::where('id', $item->group_id)->first()->sms_count;
        }

        return view('livewire.history-index');
    }

    private function applyDateFormat($dateString)
    {
        $timestamp = strtotime($dateString);
        return date("Y-m-d", $timestamp);
    }
}
