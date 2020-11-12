<?php
namespace App\Libraries;
Class Products{
      
    static   $internetSpeed;
    static  $ruleStaticIP;
    static $location;
    function __construct() {
        
       $this->internetSpeed = "100 and Fiber"; 
       $this->ruleStaticIP = "Yes";
       $this->location = "Rural";
    }
   
    
}
    
    
