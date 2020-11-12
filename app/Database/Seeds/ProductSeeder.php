<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class ProductSeeder extends \CodeIgniter\Database\Seeder
{
    public static $productID;
  public function run()
  {
     
      
      $data['TYPE_ID'] = ProductTypeSeeder :: $productID;
      $data['PRODUCT_NAME'] = 'Samsung';
      
      $this->db->table('productlist')->insert($data);
      self::$productID =  $this->db->insertID();  
      return self::$productID;
  }
}
