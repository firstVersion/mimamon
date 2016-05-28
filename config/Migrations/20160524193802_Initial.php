<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('mimamon')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('start_time', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('end_time', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('user_id');
        $this->dropTable('start_time');
        $this->dropTable('end_time');
    }
}
