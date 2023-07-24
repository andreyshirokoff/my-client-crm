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

    public ?string $footer = '';
    public ?string $nonMedical = '';
    public ?string $medical = '';
    public ?string $note = '';

    public $checkBoxShowPhone;
    public $checkBoxCanEditCard;
    public $checkBoxCanEditControl;
    public $checkBoxCanRemoveSignedDocs;

    public $themes;
    public $selectedThemeId;

    public $themeId;

    protected $rules = [
        'salonTitle' => 'required|min:3|max:100',
        'footer' => 'max:200',
        'nonMedical' => 'max:200',
        'medical' => 'max:200',
        'note' => 'max:200',
    ];

    public function render()
    {
        return view('livewire.rodo-index');
    }

    public function submitForm()
    {
        dd(123);
        $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:5120',
        ]);

        UserGroup::where('id', Auth::user()->group_id)->first()
            ->update([
                'name' => $this->salonTitle,
                'can_edit_card' => $this->checkBoxCanEditCard,
                'can_edit_control' => $this->checkBoxCanEditControl,
                'can_remove_signed_docs' => $this->checkBoxCanRemoveSignedDocs,
                'show_phone' => $this->checkBoxShowPhone,
                'footer' => $this->footer,
                'non_medical' => $this->nonMedical,
                'medical' => $this->medical,
                'note_user' => $this->note,


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
        $this->checkBoxShowPhone = $salon->show_phone;
        $this->checkBoxCanEditCard = $salon->can_edit_card;
        $this->checkBoxCanEditControl = $salon->can_edit_control;
        $this->checkBoxCanRemoveSignedDocs = $salon->can_remove_signed_docs;
    }


}
