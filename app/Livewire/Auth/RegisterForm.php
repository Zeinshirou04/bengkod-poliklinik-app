<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Database\QueryException;

class RegisterForm extends Component
{

    public $fullname;
    public $email;
    public $password;
    public $alamat;
    public $no_hp;
    public $message;

    public function rules()
    {
        return (new RegisterRequest())->rules();
    }

    public function store()
    {
        $this->validate();

        try {
            $user = User::create([
                'nama' => $this->fullname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'role' => '1'
            ]);

            Auth::login($user);

            return redirect()->route('dashboard.patient.overview');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                $this->addError('email', 'Email already taken, please use another email.');
                return back()->withInput();
            }

            $this->addError('error', "Something went wrong, please try again. (" . $e->getCode() . ")");
            return back()->withInput();
        }
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
