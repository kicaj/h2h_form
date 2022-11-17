<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMessagesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('messages');
        $table->addColumn('name', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('subject', 'string', [
            'limit' => 200,
            'null' => false,
        ]);
        $table->addColumn('content', 'text', [
            'null' => false,
        ]);
        $table->addColumn('agreement_1', 'boolean', [
            'null' => false,
        ]);
        $table->addColumn('agreement_2', 'boolean', [
            'default' => false,
            'null' => false,
        ]);
        $table->addTimestamps();
        $table->create();
    }
}
