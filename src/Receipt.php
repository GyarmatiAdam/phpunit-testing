<?php
namespace TDD;

class Receipt {
   public function total(array $items = []) { 
  // takes array of items, by default an empty array
     return array_sum($items); 
  // array_sum is built in function which sum up 
  // an array passed as an argument
   }

   public function tax($amount, $tax) {
          return ($amount * $tax);
  }

//   2) Expand on the current Receipt example and add a function that accepts 5 parameters and calculates a sum of them and write a test for it
  public function exerciseTwo(array $totitem =[]){
     return array_sum($totitem);
  }

//   3) Expand on the current Receipt example and add a function that calculates an average value of an array and write a test for this function 
  public function exerciseThree(array $items =[]){
      $average = array_sum($items) / count($items);
      return $average;
  }

//   4) Organize your tests with phpunit.xml to control the execution of your tests

}
