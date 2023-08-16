<?php
    namespace App;

    class PalindromeGenerator
    {
        public static function generatePalindrome($input)
        {
            $reversedInput = strrev($input);
            $palindrome = $input . $reversedInput;
            return $palindrome;
        }
    }
?>