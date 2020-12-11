<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m201210_122133_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'idProduct' => $this->integer()->notNull()->comment('Продукт'),
            'idUser' => $this->integer()->notNull()->comment('Пользователь'),
            'price' => $this->float()->comment('Сумма заказа'),
            'orderDate' => $this->dateTime()->comment('Дата заказа'),
            'status' => $this->string(100)->comment('Статус'),
        ]);

        $this->addForeignKey('fk-order-idProduct', '{{%order}}', 'idProduct', '{{%product}}', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('fk-order-idUser', '{{%order}}', 'idUser', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-order-idProduct', '{{%order}}');
        $this->dropForeignKey('fk-order-idUser', '{{%order}}');
        $this->dropTable('{{%order}}');
    }
}
