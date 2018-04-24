<?php

use yii\db\Migration;

/**
 * Class m180424_133435_update_profile_table
 */
class m180424_133435_update_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('profile', 'log', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('profile', 'log');
    }
}
