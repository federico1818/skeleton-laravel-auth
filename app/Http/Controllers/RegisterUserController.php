<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;

class RegisterUserController extends Controller
{
    public function store(RegisterUserRequest $request)
    {
        return $request->all();
    }
}
