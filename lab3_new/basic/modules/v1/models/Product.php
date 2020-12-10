<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name Название
 * @property string $img Ссылка на изображение
 * @property float $price Цена
 * @property string $description Описание
 * @property float $weight Вес
 * @property int $idCategory Категория товара
 * @property int $idFilling Начинка
 *
 * @property Order[] $orders
 * @property Category $idCategory0
 * @property Filling $idFilling0
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img', 'price', 'description', 'weight', 'idCategory', 'idFilling'], 'required'],
            [['price', 'weight'], 'number'],
            [['description'], 'string'],
            [['idCategory', 'idFilling'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['img'], 'string', 'max' => 255],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'id']],
            [['idFilling'], 'exist', 'skipOnError' => true, 'targetClass' => Filling::className(), 'targetAttribute' => ['idFilling' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'img' => 'Ссылка на изображение',
            'price' => 'Цена',
            'description' => 'Описание',
            'weight' => 'Вес',
            'idCategory' => 'Категория товара',
            'idFilling' => 'Начинка',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['idProduct' => 'id']);
    }

    /**
     * Gets query for [[IdCategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory0()
    {
        return $this->hasOne(Category::className(), ['id' => 'idCategory']);
    }

    /**
     * Gets query for [[IdFilling0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFilling0()
    {
        return $this->hasOne(Filling::className(), ['id' => 'idFilling']);
    }
}
