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

            while($score != 0) {
                if ($score >= 128) {
                    $output .= "cats, ";
                    $score = $score - $cats;
                }
                if ($score >= 64) {
                    $output .= "pollen, ";
                    $score = $score - $pollen;
                }
                if ($score >= 32) {
                    $output .= "chocolate, ";
                    $score = $score - $chocolate;
                }
                return  $output;
            }
        }
    }
?>
