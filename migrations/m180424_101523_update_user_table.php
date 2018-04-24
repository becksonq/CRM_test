<?php

use yii\db\Migration;
use app\models\User;
use dektrium\user\helpers\Password;

/**
 * Class m180424_101523_update_user_table
 */
class m180424_101523_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('user', [
            'username',
            'email',
            'password_hash',
            'auth_key',
            'confirmed_at',
            'unconfirmed_email',
            'blocked_at',
            'registration_ip',
            'created_at',
            'updated_at',
            'flags',
            'last_login_at',
        ], [
            [
                'admin',
                'admin@admin.ru',
                '$2y$10$wynEFL/lvx2Gvxl2AsrK/uqb6.s4mDorIQ7qzMtB.LDbA.HYk28jG',
                'Z-4OrC3fMmil07jhVQTMXcRHfRJNys6T',
                '1524568490',
                null,
                null,
                '127.0.0.1',
                '1524568490',
                '1524568490',
                '0',
                null,
            ]
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
