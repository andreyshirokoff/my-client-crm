<?php

namespace App\Http\Livewire\Workers;

use App\Models\UserGroup;
use App\Nova\User;
use Livewire\Component;

class CreateWorker extends Component
{
    public $isLimit = true;

    public $user;

    public $password;

    protected $rules = [
        'user.fullname' => 'string|required',
        'user.email' => 'email|required',
        'user.phone' => 'string|required|min:8',
        'password' => 'string|required',
    ];

    public function mount()
    {
        $gr = UserGroup::find(auth()->user()->group_id);
        if ($gr){
            $count = \App\Models\User::where('group_id', auth()->user()->group_id)->count();
            if ($count < $gr->users_count) $this->isLimit = false;
        }
        if (!$this->isLimit) $this->user = new \App\Models\User();
    }

    public function createUser()
    {
        $this->user->phone = '+'.preg_replace('/\D/', '', $this->user->phone);
        $this->validate();
        $this->user->password = bcrypt($this->password);
        $this->user->group_id = auth()->user()->group_id;
        $this->user->roles = 'user';
        $this->user->theme_id = 1;
        $this->user->is_main = 0;
        $this->user->save();

        return redirect()->route('settings');
    }
    public function render()
    {
        return view('livewire.workers.create-worker');
    }
}
