<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\UserLoginContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\Backend\LoginValidatorRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * @var
     */
    protected $service;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * LoginController constructor.
     * @param UserLoginContract $service
     */
    public function __construct(UserLoginContract $service)
    {
        $this->service = $service;
    }

    /**
     * @param LoginValidatorRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginValidatorRequest $request)
    {
        return $this->service->login($request);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        return $this->service->logout();
    }

    /**
     * @return mixed
     */
    public function check()
    {
        return $this->service->check();
    }
}
