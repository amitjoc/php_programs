<?php 
namespace oop;
 
 class Console{
   
    function __construct(){}
    
    
    public function log($logMessage, $pr=false) {
        if($pr == TRUE){
            
            echo '<hr><pre>';
                print_r($logMessage);
            echo '</pre><hr>';
        }else{
            
            var_dump($logMessage);
        }
        
    }
    
}
?>