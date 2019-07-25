<?php
namespace TDD\Test;
    
  use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
  use TDD\Receipt; // imports Receipt class
  /*
   * @covers TDD\Receipt
   */
  class ReceiptTest extends TestCase {
      
      public function setUp():void {
          $this->Receipt = new Receipt();// create new instance of the Receipt class
      }
      public function tearDown():void {
          unset($this->Receipt); // unset the instance to ensure that PHP doesn't carry any over from one test to the next
      }

      public function testTotal() {

          $input = [0, 2, 5, 8]; // put the inputs in its own array
          $output = $this->Receipt->total($input); // store the sum of the array within a $output variable
          $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
                  15, // 1st param is expected value
                  $output, // 2nd param is the $output variable
                  'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
                );

      }

       public function testTax() {
              $inputAmount = 5;
              $inputTax = 0.25;
              $output = $this->Receipt->tax($inputAmount, $inputTax);
              $this->assertEquals(1.25, $output, 
                  'Wrong tax calculation, expected: 1.25'   
                  );
      }

    //   2) Expand on the current Receipt example and add a function that accepts 5 parameters and calculates a sum of them and write a test for it
      public function testexerciseTwo(){
          $totitem = [2, 4, 5, 6, 3];
          $totoutput = $this->Receipt->exerciseTwo($totitem);

          $this->assertEquals(
              20,
              $totoutput,
              'Total output should be 20'
          );
      }

    //   3) Expand on the current Receipt example and add a function that calculates an average value of an array and write a test for this function 
      public function testexerciseThree(){
          $items =[8, 4];
          $output = $this->Receipt->exerciseThree($items);

          $this->assertEquals(
            6,
            $output,
            'False'
          );
      }

    //   4) Organize your tests with phpunit.xml to control the execution of your tests
    
}