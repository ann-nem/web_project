<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Product;
use Yii;

class ProductController extends ApiController {

    public function actionAll() {
        return Product::find()->all();
    }

    public function actionId($id) {
        return Product::findOne(['id' => $id]);
    }

    public function actionCreate() {
        $product = new Product();
        $product->load(Yii::$app->request->getBodyParams(), '');
        $product->save();

        return $product;
    }
}