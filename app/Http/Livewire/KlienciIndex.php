<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\DocumentTemplate;
use Livewire\Component;
use Livewire\WithPagination;

class KlienciIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.klienci-index', [
            'docs' => DocumentTemplate::paginate(5)
        ]);
    }

    public function downloadFile($filePath)
    {
        return response()->download(public_path($filePath));
    }
}
