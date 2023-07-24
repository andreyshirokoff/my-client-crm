<?php

namespace App\Http\Livewire;

use App\Models\Theme;
use App\Models\UserGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RodoIndex extends Component
{
    use WithFileUploads;

    public ?string $salonTitle = '';
    public $image;

    public $themes;
    public $selectedThemeId;

    public $themeId;

    protected $rules = [
        'salonTitle' => 'required|min:3',
    ];

    public function render()
    {
        return view('livewire.rodo-index');
    }

    public function submitForm()
    {
        $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:5120',
        ]);

        UserGroup::where('id', Auth::user()->group_id)->first()
            ->update([
                'name' => $this->salonTitle,

            ]);

        Auth::user()->update(['theme_id' => $this->selectedThemeId]);
        return redirect(request()->header('Referer'));
    }

    public function mount()
    {
        $this->getSalon();
        $this->themeSelect();
    }

    public function themeSelect()
    {
        $this->themes = Theme::all();
        $this->selectedThemeId = Auth::user()->theme_id;
    }

    public function getSalon()
    {
        $salon = UserGroup::where('id', Auth::user()->group_id)->first();
        $this->salonTitle = $salon->name;
        $this->image = $salon->logo_path;
    }


}
