<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Migration_Products extends Migration
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
              'PRODUCT_NAME' => array(
                 'type' => 'VARCHAR',
                 'constraint' => '100',
              ),
              'TYPE_ID' => array(
                 'type' => 'INT',
                 'null' => true,
              ),
           )
        );

        $this->forge->addPrimary('ID');
        $this->forge->createTable('productlist');
    }

    public function down()
    {
        $this->dbforge->drop_table('productlist');
    }
}