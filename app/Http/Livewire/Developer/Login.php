<?php

namespace App\Http\Livewire\Developer;

use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.developer.login')->layout('layouts.base');
    }

    public function postLogin()
    {
        $validated = $this->validate();
        $auth = resolve('littlegatekeeper');

        $loginSuccess = $auth->attempt($validated);
        if (!$loginSuccess) {
            return session()->flash('flash.danger', 'Invalid Credentials.');
        }
        return redirect()->to(route('developer.dashboard'));
    }
}
