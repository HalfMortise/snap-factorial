<?php
/**
 * Function for calculating the factorial of n
 *
 * @throws \RangeException if data values are out of bounds (negative integers: if n < 0)
 * @throws \RangeException if data values are out of bounds (if n > 20: 21! and above overflow the int type)
 */


//must be a loop in order for the calculation to work properly
function factorial(int $n) {


   //each exception gets its own throw message
   if($n < 0) {
      throw(new \RangeException("No Negatives"));
   }
   if($n > 20) {
      throw(new \RangeException("Numbers Too Large"));
   }

   $calculation = 1; //default to 0! = 1
   for($i = 0; $i <= $n; $i++) {
      $calculation = $calculation * $i;
   }

   return $calculation;
}




/**
 * my draft

   // 0! = 0! = 1
   $calculation = 0;

   // Only if $in is >= 0
   for ($i = 0; $i <= $in; $i++) {
      $calculation *= $i;
   } catch(\Exception $exception) {
      //if the row couldn't be converted, rethrow it
      throw(new \PDOException($exception->getMessage("Integer can only be between 0-20"), 0, $exception));
   }
   return $calculation;
} */