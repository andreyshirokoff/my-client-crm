<?php

namespace App\Http\Livewire;

use App\Models\GroupBoot;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEditIndex extends Component
{
    use WithFileUploads;
    public $image;
    public $imageFromDb;

    public $queryString = ['groupId', 'productId'];
    public $groupId;
    public $productId;

    public ?string $name = '';
    public ?int $price = 0;
    public ?int $dayOff = 0;
    public ?string $description = '';

    public function render()
    {
        $groupBoot = GroupBoot::where('id', $this->productId)->first();

        $this->name = $groupBoot->name;
        $this->price = $groupBoot->price;
        $this->dayOff = $groupBoot->day_off;
        $this->description = $groupBoot->description;
        $this->imageFromDb = $groupBoot->photo;

        return view('livewire.product-edit-index');
    }

    public function submitForm()
    {
        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:5120|nullable',
            'name' => 'string|min:3|required',
            'price' => 'numeric|min:0',
            'dayOff' => 'integer|min:0',
            'description' => 'string|min:3|nullable',
        ]);

        $array = [
            'name' => $this->name,
            'price' => $this->price,
            'group_id' => $this->groupId,
            'day_off' => $this->dayOff,
            'description' => $this->description,
        ];
        if($this->image)
        {
            $path = $validatedData['image']->store('storage/product');
            $array['photo'] = str_replace("storage/product/", "", $path);
        }


        GroupBoot::where('id', $this->productId)
            ->update($array);

        return redirect('/dashboard/ustawienia');

    }
}
