<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Order;
use app\modules\v1\models\User;
use Yii;

class OrderController extends ApiController {

    public function actionAll() {
        return Order::find()->all();
    }

    public function actionId($id) {
        return Order::findOne(['id' => $id]);
    }

    public function actionIduser($idUser) {
        return Order::findAll(['idUser' => $idUser]);
    }

    public function actionCreate() {
        $order = new Order();
        $order->load(Yii::$app->request->getBodyParams(), '');
        $order->save();

        return $product;
    }
}