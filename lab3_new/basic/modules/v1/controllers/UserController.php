<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\User;
use yii\rest\Controller;

class UserController extends ApiController {
    public function actionLogin() {
        // login stuff
    }

    public function actionRegister() {
        // register stuff
    }

    public function actionAll() {
        return [
            [
                'id' => 1,
                'login' => "user1",
                'password' => 'pass1',
            ],
            [
                'id' => 2,
                'login' => "user2",
                'password' => 'pass2',
            ],
            [
                'id' => 3,
                'login' => "user3",
                'password' => 'pass3'
            ],
        ];
    }
}