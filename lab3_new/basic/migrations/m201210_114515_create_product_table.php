<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201210_114515_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(128)->notNull()->comment('Название'),
            'img' => $this->string()->notNull()->comment('Ссылка на изображение'),
            'price' => $this->float()->notNull()->comment('Цена'),
            'description' => $this->text()->notNull()->comment('Описание'),
            'weight' => $this->float()->notNull()->comment('Вес'),
            'idCategory' => $this->integer()->notNull()->comment('Категория товара'),
            'idFilling' => $this->integer()->notNull()->comment('Начинка'),

        ]);

        $this->addForeignKey('fk-product-idCategory', '{{%product}}', 'idCategory', '{{%category}}', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('fk-product-idFilling', '{{%product}}', 'idFilling', '{{%filling}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-product-idCategory', '{{%product}}');
        $this->dropForeignKey('fk-product-idFilling', '{{%product}}');
        $this->dropTable('{{%product}}');
    }
}
