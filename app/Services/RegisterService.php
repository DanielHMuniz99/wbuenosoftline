<?php

namespace App\Services;

use Hash;
use App\Repositories\UserRepository;
use App\Http\Requests\RegisterRequest;

class RegisterService
{
    public $user;

    public $request;

    public function __construct(RegisterRequest $request)
    {
        $this->request = $request;
        $this->user = new UserRepository();        
    }

    public function register()
    {
        $data = $this->request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = $this->user->create($data);
        auth()->login($user);
        return redirect('/')->with('success', trans("messages.account_successfully_registered"));
    }
}