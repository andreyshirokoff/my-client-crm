<?php

namespace App\Http\Livewire;

use App\Models\GroupBoot;
use Livewire\Component;

class ProductDeleteIndex extends Component
{
    public $queryString = ['productId'];
    public $productId;
    public function render()
    {
        return view('livewire.product-delete-index');
    }

    public function submitForm()
    {
        GroupBoot::where('id', $this->productId)->delete();

        return redirect('/dashboard/ustawienia');
    }
}
