<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class ProductTypeSeeder extends \CodeIgniter\Database\Seeder
{
   public static  $productID; 
  public function run()
  {
      $data = [];
      
      $data['TYPE_NAME'] = 'MobilePhone';
      $this->db->table('product_type')->insert($data);
      self::$productID =  $this->db->insertID();
      return self::$productID;
  }
}