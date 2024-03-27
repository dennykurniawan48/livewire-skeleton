<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use LivewireUI\Modal\ModalComponent;

class UserAdd extends ModalComponent
{
    public $error;

    #[Validate]
    public $name, $email, $password;

    public function rules()
    {
        return [
            "name" => "string|required|min:3",
            "email" => "email|required",
            "password" => "string|min:6"
        ];
    }

    public function save(){
        $this->validate();
        $user = User::where("email", "=", $this->email)->first();
        if($user){
            $this->error = 'Email is registered';
        }else{
            $newUser = new User();
            $newUser->name = $this->name;
            $newUser->email = $this->email;
            $newUser->password = Hash::make($this->password);
            $newUser->save();
            $this->closeModalWithEvents([
                UserIndex::class => 'updatedRefreshUser',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.user-add');
    }
}
