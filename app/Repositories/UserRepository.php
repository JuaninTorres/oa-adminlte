<?php

namespace App\Repositories;


use App\User;

class UserRepository {

    public function firstOrCreate($userData)
    {
        $user  = User::firstOrCreate([
            'email' => $userData->email,
        ]);

        $avatarParts = explode('?', $userData->avatar);
        $user->update([
            'name' => $userData->name,
            'avatar' => $avatarParts[0],
        ]);

        return $user;
    }
}