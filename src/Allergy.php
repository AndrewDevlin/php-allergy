<?php
    class Allergy
    {
        function checkAllergy($score)
        {
            $eggs = 1;
            $peanuts = 2;
            $shellfish = 4;
            $strawberries = 8;
            $tomatoes = 16;
            $chocolate = 32;
            $pollen = 64;
            $cats = 128;
            $output = "";

            if ($score >= 128){
                $output .= "cats, ";
                $score = $score - $cats;


                // $money = fmod($money, $quarters);
                // $number_of_dimes = $money / 0.1;
                // $number_of_dimes = floor($number_of_dimes);
                // $number_of_dimes = "dimes: ". $number_of_dimes;
                //
                // $money = fmod($money, $dimes);
                // $number_of_nickels = $money / 0.05;
                // $number_of_nickels = floor($number_of_nickels);
                // $number_of_nickels = "nickels: ". $number_of_nickels;
                //
                // $money = fmod($money, $nickles);
                // $number_of_pennies = $money / 0.01;
                // $number_of_pennies = round($number_of_pennies, 0, PHP_ROUND_HALF_DOWN);
                // $number_of_pennies = "pennies: ". $number_of_pennies;
                //
                // $output = $number_of_quarters . " " . $number_of_dimes . " " . $number_of_nickels . " " . $number_of_pennies;

                return  $output;
            }
        }
    }
?>
