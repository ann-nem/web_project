<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $idProduct Продукт
 * @property int $idUser Пользователь
 * @property float|null $price Сумма заказа
 * @property string|null $orderDate Дата заказа
 * @property string|null $status Статус
 *
 * @property Product $idProduct0
 * @property User $idUser0
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idProduct', 'idUser'], 'required'],
            [['idProduct', 'idUser'], 'integer'],
            [['price'], 'number'],
            [['orderDate'], 'safe'],
            [['status'], 'string', 'max' => 100],
            [['idProduct'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['idProduct' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idProduct' => 'Продукт',
            'idUser' => 'Пользователь',
            'price' => 'Сумма заказа',
            'orderDate' => 'Дата заказа',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[IdProduct0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct0()
    {
        return $this->hasOne(Product::className(), ['id' => 'idProduct']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }
}
