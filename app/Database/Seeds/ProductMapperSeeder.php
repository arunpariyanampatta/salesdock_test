<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class ProductMapperSeeder extends \CodeIgniter\Database\Seeder
{
  public function run()
  {
        $data['PRODUCT_ID'] = ProductSeeder :: $productID;
        $data['RULE_ID'] = ProductRuleSeeder::$ruleID;
      $this->db->table('product_rule_mapping')->insert($data);
      return $this->db->insertID();  
  }
}