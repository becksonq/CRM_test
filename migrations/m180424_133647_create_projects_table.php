<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m180424_133647_create_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('projects', [
            'id'           => $this->primaryKey(),
            'user_id'      => $this->integer(),
            'project_name' => $this->string(255),
            'cost'         => $this->integer(),
            'date_start'   => $this->integer(),
            'date_finish'  => $this->integer(),
        ]);

        $this->addForeignKey('fk-projects-user', 'projects', 'user_id', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-projects-user', 'projects');
        $this->dropTable('projects');
    }
}
