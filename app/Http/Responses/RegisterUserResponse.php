<?php

namespace App\Http\Responses;

use App\Models\User;

class RegisterUserResponse extends Response
{
    public function __construct(user $user) 
    {
        $this->user = $user;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->user->id,
            'name' => $this->user->name,
            'email' => $this->user->email,
        ];
    }
}
