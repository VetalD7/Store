<?php

namespace App\Contracts;

use Illuminate\Http\Request;

/**
 * Interface UserLoginContract
 * @package App\Contracts
 */
interface UserLoginContract
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function login(Request $request);

    /**
     * @return mixed
     */
    public function logout();
}
