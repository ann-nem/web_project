<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%filling}}`.
 */
class m201210_112121_create_filling_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%filling}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->comment('Название'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%filling}}');
    }
}
