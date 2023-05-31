<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LoginRequest;

class LoginService
{
    public $request;

    public function __construct(LoginRequest $request)
    {
        $this->request = $request;
    }

    public function login()
    {
        $credentials = $this->request->getCredentials();
        if(!Auth::validate($credentials)) {
            $validator = ["not_match" => trans("messages.wrong_username_password")];
            return redirect()->to('login')->withErrors($validator, 'login');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return redirect()->intended();
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}