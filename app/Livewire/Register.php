<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Register extends Component
{
    public $user_mail, $user_name;

    public function mount($user_mail, $user_name)
    {
        $this->user_mail = $user_mail;
        $this->user_name = $user_name;
    }

    #[Validate]
    public $number = '';
    public $address = '';
    // Aturan validasi untuk properti
    public function rules()
    {
        return [
            'number' => 'required|numeric',
            'address' => 'required',
        ];
    }

    public function register()
    {
        $this->validate(); // Validasi seluruh input sebelum proses

        DB::beginTransaction();


        try {
            // Simpan data user
            $user = User::create([
                'email'   => $this->user_mail,
                'name'    => $this->user_name,
                'role_id' => 3,
            ]);

            // Simpan data customer
            Customer::create([
                'user_id' => $user->id,
                'number'  => $this->number,
                'address' => $this->address,
            ]);

            // Commit transaksi jika berhasil
            DB::commit();

            // Login user
            Auth::login($user);

            session()->flash('success', 'Registration successful!');
            return redirect('/');
        } catch (\Exception $e) {
            // Rollback jika terjadi error

            DB::rollBack();

            $this->addError('error', 'Registration failed');
        }
    }


    public function render()
    {
        return view('livewire.register');
    }
}
