<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Migration_ProductTypeRuleMapper extends Migration
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
              'RULE_ID' => array(
                 'type' => 'int',
                 
              ),
              'PRODUCT_ID' => array(
                 'type' => 'int',
                 
              ),
           )
        );

        $this->forge->addPrimaryKey('ID');
        $this->forge->addKey('RULE_ID');
        $this->forge->addKey('PRODUCT_ID');
        $this->forge->createTable('product_rule_mapper');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_rule_mapper');
    }
}