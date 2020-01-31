<?php

namespace App\Repositories\Backend\User;

use App\User;

/**
 * Class UserRepository
 * @package App\Repositories\Backend\User
 */
class UserRepository
{
    /**
     * @var User
     */
    protected $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function all()
    {
        return $this->user->all();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function first($id)
    {
        return $this->user->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return true;
    }
    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return true;
    }
}
