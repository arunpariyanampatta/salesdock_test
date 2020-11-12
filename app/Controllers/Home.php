<?php namespace App\Controllers;

use App\Libraries\Products;
use App\Libraries\MobileProduct; 
use App\Models\ProductServices;
class Home extends BaseController
{
	public function index()
	{
            
            $uriSeg = $this->request->uri->getSegment(2);
            $toClass = (string) "\App\Libraries\\". $uriSeg;
            
            try{
            if(!class_exists($toClass)){
                echo "Class ".$uriSeg." Does not exist Please define under  App/Libraries";
            }    
            else{
            $className = new  $toClass;
            
            $result = get_object_vars ($className );
            
            $productModel = new ProductServices();
            $resultArray = $productModel->filterProducts($result);
            
            if(!empty($resultArray)){
            $data['result'] = $resultArray;
            $data['page'] = 'ProductList';
            return view('template',$data);
            
            }
            else{
                $data['page'] = 'ProductList';
                return view('template',$data);
            }
            }
            }
            catch(Exception $ex){
                echo "Class Not defined";
            }
           
            
	}

	//--------------------------------------------------------------------

}
