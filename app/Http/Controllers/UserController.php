<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $attributes = $request->validated();

        return response($attributes);
    }
}
