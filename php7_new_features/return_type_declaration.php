<?php 

/**
 * @author  Er. Amit Joshi
 * @param int $num1     number one to add
 * @param int $num2     number two to add
 * @return int          return sum of two integers 
 * @desc return type of the function is defined by :return_type after the function's argument part
 */ 

function add_integers(int $num1, int $num2) :int {
    return (int) ( $num1 + $num2);
}

//calling of the function
//expected output 6
echo add_integers(2, 4);

 

?>