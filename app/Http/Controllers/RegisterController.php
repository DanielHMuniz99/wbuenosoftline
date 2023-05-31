<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Hash;

use App\Services\RegisterService;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) 
    {
        $registerService = new RegisterService($request);
        $register = $registerService->register();
        return $register;
    }
}