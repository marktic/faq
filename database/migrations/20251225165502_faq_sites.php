<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class FaqSites extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('mkt_faq_sites');
        $table->addColumn('tenant_id', 'biginteger', ['null' => true])
            ->addColumn('tenant', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('metadata', 'json', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addIndex(['tenant_id', 'tenant'])
            ->create();
    }
}
