<?php

namespace App\Services\Backend\User;

use App\Contracts\UserLoginContract;
use App\Repositories\Backend\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

/**
 * Class UserLoginService
 * @package App\Services
 */
class UserLoginService implements UserLoginContract
{

    protected $repository;

    /**
     * UserLoginService constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            $token = $user->createToken('LoginToken')->accessToken;

            if ($request->password == 'password') {
                return Response::json(['access_token' => $token, 'need_change' => true]);
            }

            return Response::json(['access_token' => $token]);
        } else {
            return Response::json(['errors' => trans('auth.login_error')], 422);
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function logout()
    {
        if (request()->user()->token()->revoke()) {
            return Response::json(['success' => trans('auth.logout_success')]);
        } else {
            return Response::json(['error' => trans('auth.logout_error')], 400);
        }
    }
}
