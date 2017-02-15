<?php
require_once "src/Allergy.php";
    class AllergyTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAllergy()
        {
            // Arrange
            $tests = array(
                array(5, "shellfish, eggs"),
                array(7, "shellfish, peanuts, eggs")
            );

            $test_allergy = new Allergy;

            foreach ($tests as $test) {
                // ACT
                $result = $test_allergy->checkAllergy($test[0]);

                // Assert
                $this->AssertEquals($test[1], $result);
            }
            // $this->AssertEquals("cats, pollen, chocolate, tomatoes, strawberries, shellfish, peanuts, eggs, ", $result);
        }
    }
 ?>
