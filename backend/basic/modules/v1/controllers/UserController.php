<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\User;
use yii\rest\Controller;
use Yii;

class UserController extends ApiController {
    public function actionLogin() {

        $username = Yii::$app->request->getBodyParam('username');
        $password = Yii::$app->request->getBodyParam('password');

        $user = User::findOne(['name' => $username, 'password' => $password]);

        if ($user == null) {
            return [
                'statusText' => "Неправильно введено имя пользователя или пароль"
            ];
        }

        while (true) {
            $token = md5(microtime(true));

            $userWithSameToken = User::findOne(['accessToken' => $token]);
            if ($userWithSameToken != null){
                continue;
            } else {
                $user->accessToken = $token;
                $user->save();
                break;
            }
        }

        return $user;
    }

    public function actionRegister() {

        $username = Yii::$app->request->getBodyParam('username');
        $password = Yii::$app->request->getBodyParam('password');

        $user = User::findOne(['name' => $username]);

        if ($user != null){
            return [
                'statusText' => "Пользователь с таким логином уже существует"
            ];
        }

        $newUser = new User();
        $newUser->name = $username;
        $newUser->password = $password;

        while (true){
            $token = md5(microtime(true));

            $userWithSameToken = User::findOne(['accessToken' => $token]);
            if ($userWithSameToken != null){
                continue;
            } else {
                $newUser->accessToken = $token;
                break;
            }
        }

        $newUser->save();

        return $newUser;
    }

    public function actionAll() {
        return User::find()->all();
    }
}