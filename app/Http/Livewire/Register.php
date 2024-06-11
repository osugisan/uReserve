<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules =[
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255|email|unique:users',
        'name' => 'required|string|min:8',
    ];

    public function register()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
