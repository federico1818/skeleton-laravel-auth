<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Responses\RegisterUserResponse;
use App\Events\RegisteredUser;

class RegisterUserController extends Controller
{
    public function store(RegisterUserRequest $request)
    {
        $user = User::create($request->attributes());

        //RegisteredUser::dispatch($user);

        $this->dispatch(new RegisteredUser($user));

        return new RegisterUserResponse($user);
    }
}
