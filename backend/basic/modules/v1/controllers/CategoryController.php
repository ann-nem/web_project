<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Category;
use Yii;

class CategoryController extends ApiController {

    public function actionAll() {
        return Category::find()->all();
    }

    public function actionId($id) {
        return Category::findOne(['id' => $id]);
    }

    public function actionCreate() {
        $category = new Category();
        $category->load(Yii::$app->request->getBodyParams(), '');
        $category->save();

        return $category;
    }
}