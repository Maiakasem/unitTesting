<?php

class Factorial {
    
    static public function getFact($number) {
         // check if $number is indeed an integer
        if(gettype($number) != 'integer' || $number < 0) {
            return null;
        }

        $counter = $number;
        $fact = 1;

        for(;$counter > 0; $counter--) {
            $fact *= $counter;
        }

        return $fact;
    }
}