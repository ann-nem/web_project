<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Product;
use app\modules\v1\models\Category;
use app\modules\v1\models\Filling;
use Yii;

class ProductController extends ApiController {

    public function actionAll() {
        return Product::find()->all();
    }

    public function actionId($id) {
        return Product::findOne(['id' => $id]);
    }

    public function actionIdcategory($idCategory) {
        return Product::findAll(['idCategory' => $idCategory]);
    }

    public function actionIdfilling($idFilling) {
        return Product::findAll(['idFilling' => $idFilling]);
    }

    public function actionHitproducts() {
        return Product::findAll(['hitProduct' => 1]);
    }

    public function actionCreate() {
        $product = new Product();
        $product->load(Yii::$app->request->getBodyParams(), '');
        $product->save();

        return $product;
    }

    public function actionInfo($url)
    {
        $product = Product::findOne()
            //->with(['category', 'propertiesValues', 'propertiesValues.property'])
            ->where(['url' => $url])
            ->one();

        return $product;
    }

}