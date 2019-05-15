<?php
/**
 * Question : Write a program in PHP to print Fibonacci series . 
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34 
 * 
 * Hint: 
 * A series of numbers in which each number ( Fibonacci number ) 
 * is the sum of the two preceding numbers. 
 * The simplest is the series 1, 1, 2, 3, 5, 8, etc
 * 
 */


/**
 * 
 * @param int $steps  Counting of the steps start from 1 
 */

function print_fibonacci_series( int $steps)
{
    $first_digit = 0;
    $second_digit = 1;
    $index_counter =0;
    
    
    if( $steps == 0 ) echo $first_digit;
    else if( $steps == 1 ){ echo $first_digit .','.$second_digit;}
    else if( $steps > 1 ) 
    {
        $offset = $steps-1; //like print only 4 digits 
        echo $first_digit .','.$second_digit ;
        for($index_counter =1; $index_counter < $offset; $index_counter++)
        {
            $next_digit = $first_digit + $second_digit;
            echo ','.$next_digit ;
            
            $first_digit =$second_digit;
            $second_digit=$next_digit;
            
            
        }
    }
    
}
echo "Steps 0: " ;
print_fibonacci_series(0);
echo '<hr/>';
echo "Steps 1: " ;
print_fibonacci_series(1);
echo '<hr/>';
echo "Steps 3: " ;
print_fibonacci_series(3);
echo '<hr/>';
echo "Steps 4: " ;
print_fibonacci_series(4);
 

