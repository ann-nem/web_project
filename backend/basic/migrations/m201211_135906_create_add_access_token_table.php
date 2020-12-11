<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%add_access_token}}`.
 */
class m201211_135906_create_add_access_token_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'accessToken', $this->string(512)->comment('Токен доступа'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('{{%user}}', 'accessToken');

       return false;
    }
}
