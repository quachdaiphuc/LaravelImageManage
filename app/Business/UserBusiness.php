<?php
namespace Business;

use App\User;

class UserBusiness {
    public function getUserByUserNameAndPassWord($username, $password) {
        $user = User::where('username', $username)->where('password', $password)->first();
        return $user;
    }
}