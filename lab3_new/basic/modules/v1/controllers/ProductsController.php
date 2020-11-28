<?php

namespace app\modules\v1\controllers;

class ProductsController extends ApiController {
    public function actionCatalog() {
        $products = [
            [
                'id' => 1,
                'name' => 'Торт "Секрет Небес"',
                'url' => 'Секрет Небес',
                'image' => 'https://madbutterbd.com/images/mad_butter/products/1/image.jpg',
                'price' => 3500,
            ],
            [
                'id' => 2,
                'name' => 'Капкейки "Единорог"',
                'url' => 'Единорог',
                'image' => 'https://i.pinimg.com/originals/69/42/b8/6942b8c6c23c9705e82055a5f27e57ce.jpg',
                'price' => 650,
            ],
            [
                'id' => 3,
                'name' => 'Торт "Космос"',
                'url' => 'Единорог',
                'image' => 'https://i.pinimg.com/736x/92/79/f7/9279f78aa0e02295cb9d31d1464dbb38.jpg',
                'price' => 3500,
            ]
        ];

        return $products;
    }
}