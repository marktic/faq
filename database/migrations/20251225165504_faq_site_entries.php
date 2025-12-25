<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class FaqSiteEntries extends AbstractMigration
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
        $table = $this->table('mkt_faq_site_entries');
        $table->addColumn('site_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('category_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('entry_id', 'integer', ['null' => false, 'signed' => false])
            ->addColumn('position', 'smallinteger', ['default' => 0])
            ->addIndex(['site_id', 'entry_id'], ['unique' => true])
            ->addIndex(['site_id'])
            ->addIndex(['category_id'])
            ->addIndex(['entry_id'])
            ->addIndex(['position'])
            ->addForeignKey('site_id', 'mkt_faq_sites', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('category_id', 'mkt_faq_site_categories', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('entry_id', 'mkt_faq_entries', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
