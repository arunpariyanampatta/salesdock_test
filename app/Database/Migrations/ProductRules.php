<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Migration_ProductRule extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(
           array(
              'ID' => array(
                 'type' => 'BIGINT',
                 
                 'unsigned' => true,
                 'auto_increment' => true
              ),
              'RULE_NAME' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
              ),
              'RULE_VALUE' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
              ),
           )
        );

        $this->forge->addPrimaryKey('ID');
        $this->forge->createTable('product_rules');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_rules');
    }
}