<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Responses\RegisterUserResponse;

class RegisterUserController extends Controller
{
    public function store(RegisterUserRequest $request)
    {
        $user = User::create($request->attributes());

        return new RegisterUserResponse($user);
    }
}
