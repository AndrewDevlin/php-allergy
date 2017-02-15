<?php
require_once "src/Allergy.php";
    class AllergyTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAllergy()
        {
            $test_coin = new Allergy;
                //Arrange
                $input = 5;
                $test_coin->checkAllergy($input);
                //Act
                $result = $test_coin->checkAllergy($input);
                //Assert
                // $this->AssertEquals("cats, pollen, chocolate, tomatoes, strawberries, shellfish, peanuts, eggs, ", $result);
                $this->AssertEquals("shellfish, eggs", $result);
        }
    }
 ?>
