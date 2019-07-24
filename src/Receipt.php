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

}