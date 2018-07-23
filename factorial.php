<?php
/**
 * Function for calculating the factorial of n
 *
 * @throws \RangeException if data values are out of bounds (negative integers: if n < 0)
 * @throws \RangeException if data values are out of bounds (if n > 20, 21! and above overflow the int type)
 */


function factorial( $n ) {
   if ( $n == 0 ) return 1;
   return factorial( $n-1 ) * $n;
}


