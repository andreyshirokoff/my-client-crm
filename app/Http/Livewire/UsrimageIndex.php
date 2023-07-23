<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsrimageIndex extends Component
{
    use WithFileUploads;
    public $image;
    public function render()
    {
        return view('livewire.usrimage-index');
    }

    public function save()
    {

        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:5120', // Проверка на изображение и максимальный размер 1 МБ
        ]);

        $path = $validatedData['image']->store('storage', 'public');

        Auth::user()->update([
            'avatar' => str_replace("storage/", "", $path),
        ]);
        sleep(1);
        return redirect()->to('/us');
    }
}
