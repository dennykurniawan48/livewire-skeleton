<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserIndex extends Component
{
    public $search = "";
    public $users = [];

    public function mount(){
        $this->users = User::where('name', 'like', "%$this->search%")->get();
    }

    public $listeners = [
        "updatedRefreshUser" => "refresh",
        "updatedName"
    ];

    public function updatedName($search){
        $this->validateOnly('search');
    }

    public function refresh(){
        $this->users = User::where('name', 'like', "%$this->search%")->get();
    }
    
    public function render()
    {
        return view('livewire.user-index');
    }
}
