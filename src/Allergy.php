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
                if ($score >= 16) {
                    $output .= "tomatoes, ";
                    $score = $score - $tomatoes;
                }
                if ($score >= 8) {
                    $output .= "strawberries, ";
                    $score = $score - $strawberries;
                }
                if ($score >= 4) {
                    $output .= "shellfish, ";
                    $score = $score - $shellfish;
                }
                if ($score >= 2) {
                    $output .= "peanuts, ";
                    $score = $score - $peanuts;
                }
                if ($score >= 1) {
                    $output .= "eggs, ";
                    $score = $score - $eggs;
                }
                return  $output;
            }
        }
    }
?>
