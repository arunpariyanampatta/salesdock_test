<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Migration_ProductType extends Migration
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
              'TYPE_NAME' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
              ),
              
           )
        );

        $this->forge->addPrimaryKey('ID');
        
        $this->forge->createTable('product_type');
    }

    public function down()
    {
        $this->dbforge->drop_table('product_type');
    }
}