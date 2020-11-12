<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class MainSeeder extends \CodeIgniter\Database\Seeder
{
   
    
  public function run()
  {    
      $id = $this->call('ProductTypeSeeder');
      $this->call('ProductSeeder');        
      $this->call('ProductRuleSeeder');
      $this->call('ProductMapperSeeder');
  }
}
