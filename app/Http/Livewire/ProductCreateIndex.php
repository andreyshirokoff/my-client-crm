<?php

namespace App\Http\Livewire;

use App\Models\GroupBoot;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreateIndex extends Component
{
    use WithFileUploads;
    public $image;

    protected $listeners = ['descriptionUpdated' => 'updateDescription'];

    public $queryString = ['groupId'];
    public $groupId;

    public ?string $name = '';
    public ?int $price = 0;
    public ?int $dayOff = 0;
    public ?string $description = '';

    public function render()
    {
        return view('livewire.product-create-index');
    }


    public function submitForm()
    {
        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:5120',
            'name' => 'string|min:3|required',
            'price' => 'numeric|min:0',
            'dayOff' => 'integer|min:0',
            //'description' => 'string|min:3|nullable',
        ]);

        $path = $validatedData['image']->store('storage/product');



        $ss = GroupBoot::create([
            'name' => $this->name,
            'price' => $this->price,
            'group_id' => $this->groupId,
            'day_off' => $this->dayOff,
            'description' => $this->description,
            'photo' => str_replace("storage/product/", "", $path),
        ]);

        return redirect('/dashboard/ustawienia');

    }


}
