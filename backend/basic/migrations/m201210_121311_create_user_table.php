<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m201210_121311_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull()->comment('Имя'),
            'password' => $this->string(50)->notNull()->comment('Пароль'),
            'email' => $this->string(100)->comment('Электронная почта'),
            'telephone' => $this->string(100)->comment('Номер телефона'),
            'dateBirth' => $this->dateTime()->comment('Дата рождения'),
            'address' => $this->string(200)->comment('Адрес'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
