<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentIndex extends Component
{
    use WithPagination;
    public ?string $fullname = '';
    public ?string $email = '';
    public ?string $phone = '';
    public $clients = [];
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'fullname' => 'string|min:3|nullable',
        'email' => 'email|nullable',
        'phone' => 'string|min:10|nullable',
    ];
    protected $messages = [
        'fullname.string' => 'its not string',
        'email.email' => 'its not email',
        'phone.string' => 'its not string',
    ];

    public function checkClients()
    {
        $findClient = Client::where('group_id', auth()->user()->group_id);

        if($this->fullname != '' || $this->fullname != null)
        {
            $findClient = $findClient->where('fullname', 'like', '%'.$this->fullname.'%');
        }
        if($this->email != '' || $this->email != null)
        {
            $findClient = $findClient->where('email', '=', $this->email);
        }
        if($this->phone != '' || $this->phone != null)
        {
            $findClient = $findClient->where('phone', '=', $this->phone);
        }

        $this->clients = $findClient->get();

    }
    public function render()
    {
        return view('livewire.document-index');
    }
}
