<?php
namespace App\Models;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use CodeIgniter\Model;

class ProductServices extends Model{
    
    
    
    
          public  function getProductTypes(){
        
        $data = $this->db->table("product_type")->get()->getResultArray();
        return $data;
    }
    
    function filterProducts($filterRules = []){
        $whereFilter = 'WHERE ';
        foreach($filterRules as $key=>$value){    
            $whereFilter .= "prr.RULE_NAME like '%{$key}%'  AND RULE_VALUE like '%{$value}%' OR ";
        }
        $whereFilter .= ";";
        $whereFiltered = str_replace("OR ;","",$whereFilter);
        $sql = "SELECT pro.PRODUCT_NAME,prt.TYPE_NAME,GROUP_CONCAT(CONCAT_WS(':',prr.RULE_NAME,prr.RULE_VALUE)) AS 'RULE',prm.PRODUCT_ID,prm.RULE_ID from productlist pro INNER  JOIN product_type prt on pro.TYPE_ID = prt.ID INNER  JOIN product_rule_mapping prm on prm.PRODUCT_ID = pro.ID INNER  JOIN product_rules prr on prm.RULE_ID = prr.ID   {$whereFiltered}  group by pro.PRODUCT_NAME";
        
        $result  = $this->db->query($sql);
        return $result->getResultArray();
    }
    
}