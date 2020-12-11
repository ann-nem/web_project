<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Filling;
use Yii;

class FillingController extends ApiController {

    public function actionAll() {
        return Filling::find()->all();
    }

    public function actionId($id) {
        return Filling::findOne(['id' => $id]);
    }

    public function actionCreate() {
        $filling = new Filling();
        $filling->load(Yii::$app->request->getBodyParams(), '');
        $filling->save();

        return $filling;
    }
}