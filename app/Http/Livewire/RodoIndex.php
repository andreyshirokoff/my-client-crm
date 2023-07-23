<?php

namespace App\Http\Livewire;

use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RodoIndex extends Component
{

    public $themes;
    public $selectedThemeId;

    public $themeId;
    public function submitForm()
    {
        Auth::user()->update(['theme_id' => $this->selectedThemeId]);
        return redirect(request()->header('Referer'));
    }

    public function mount()
    {
        $this->themeSelect();

    }

    public function themeSelect()
    {
        $this->themes = Theme::all();
        $this->selectedThemeId = Auth::user()->theme_id;
    }


}
