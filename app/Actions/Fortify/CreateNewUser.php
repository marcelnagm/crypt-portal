<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Configuration;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
        
        $us = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'whatsapp' => $input['whatsapp'],
            'auth_gmail' => 0,
            'profile_id' => 4,
            'password' => Hash::make($input['password']),
        ]);
        
        $conf = new Configuration();
        $conf->user_id = $us->id;
        $conf->save();
        
        return $us;
        
    }
}
