<?php

namespace app\modules\v1\models;
use yii\base\Model;

class User extends Model {

    public function login() {
        // do login
    }

    public function register() {
        // do register
    }

    public function getUsers() {
        return [
            [
                'id' => 1,
                'login' => "login1",
                'password' => 'pass1',
            ],
            [
                'id' => 2,
                'login' => "login2",
                'password' => 'pass2',
            ],
            [
                'id' => 3,
                'login' => "login3",
                'password' => 'pass3'
            ],
        ];
    }
}