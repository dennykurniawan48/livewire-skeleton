<?php

namespace App\Livewire;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;


class UserDelete extends ModalComponent
{
    public $id;

    public function mount($id){
        $this->id = $id;
    }

    public function delete(){
        $user = User::find($this->id);
        if($user){
            $user->delete();
        }
        $this->closeModalWithEvents([
            UserIndex::class => 'updatedRefreshUser',
        ]);
    }

    public function render()
    {
        return view('livewire.user-delete');
    }
}
