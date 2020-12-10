<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name Имя
 * @property string $password Пароль
 * @property string|null $email Электронная почта
 * @property string|null $telephone Номер телефона
 * @property string|null $dateBirth Дата рождения
 * @property string|null $address Адрес
 *
 * @property Order[] $orders
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['dateBirth'], 'safe'],
            [['name'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 50],
            [['email', 'telephone'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'password' => 'Пароль',
            'email' => 'Электронная почта',
            'telephone' => 'Номер телефона',
            'dateBirth' => 'Дата рождения',
            'address' => 'Адрес',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['idUser' => 'id']);
    }
}
