<?php
require_once "src/Allergy.php";
    class AllergyTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAllergy()
        {
            $test_coin = new Allergy;
                //Arrange
                $input = 225;
                $test_coin->checkAllergy($input);
                //Act
                $result = $test_coin->checkAllergy($input);
                // $expected_result = 0.10;
                //Assert
                $this->AssertEquals("cats, pollen, chocolate, ", $result);
        }
    }
 ?>
