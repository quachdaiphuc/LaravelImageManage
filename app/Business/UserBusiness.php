<?php
namespace Business;

use App\User;

class UserBusiness
{
    /**
     * get user by username and password
     * @param $username
     * @param $password
     * @return mixed
     */
    public function getUserByUserNameAndPassWord($username, $password)
    {
        $user = User::where('username', $username)->where('password', $password)->first();
        return $user;
    }
}