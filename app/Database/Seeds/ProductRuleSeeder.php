<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class ProductRuleSeeder extends \CodeIgniter\Database\Seeder
{
    public static  $ruleID; 
  public function run()
  {
        
      $data['RULE_NAME'] = 'is4G';
      $data['RULE_VALUE'] = 'Yes';
      
      $this->db->table('product_rules')->insert($data);
      self::$ruleID =  $this->db->insertID();  
      return self::$ruleID;
  }
}