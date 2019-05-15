<?php 
ini_set('error_reporting', E_ALL & ~E_NOTICE);
 
/**
 *  @author Amit Joshi
 *  @version 1.0
 *  
 *  Two types of the scalar type declatation 
 *      1. coercive (default) 
 *      2. strict  declare(strict_types=1); 
 *      
 */

//declare(strict_types=1);  
// this declaration must be the first statement in script
// to check the default coercive just comment the above line

function getSumofInt( int $a , int $b)
{
    return ($a + $b);
}

//the default coercive
echo 'Default Coercie : ' .PHP_EOL ;
echo getSumofInt(4, 5).PHP_EOL;
echo getSumofInt(4, '5 person').PHP_EOL;
echo getSumofInt(4, 5.5).PHP_EOL;
echo getSumofInt(4.5, 5.2).PHP_EOL;
 
?>