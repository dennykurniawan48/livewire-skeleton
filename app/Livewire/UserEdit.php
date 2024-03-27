<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;


class UserEdit extends ModalComponent
{
    public $id;

    #[Validate]
    public $name, $password;

    public $error;

    public function mount($id)
    {
        $user = User::find($id);
        $this->id = $user->id;
        $this->name = $user->name;
    }

    public function rules()
    {
        return [
            "name" => "string|required|min:3",
            "password" => "string|min:6"
        ];
    }

    public function update()
    {
        $this->validate();
        $newUser = User::find($this->id);
        $newUser->name = $this->name;
        $newUser->password = Hash::make($this->password);
        $newUser->save();
        $this->closeModalWithEvents([
            UserIndex::class => 'updatedRefreshUser',
        ]);
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}
