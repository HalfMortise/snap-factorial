<?php
/**
 * Function for calculating the factorial of n
 *
 * @throws \RangeException if data values are out of bounds (negative integers: if n < 0)
 * @throws \RangeException if data values are out of bounds (if n > 20: 21! and above overflow the int type)
 */


function factorial($in) {

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
}