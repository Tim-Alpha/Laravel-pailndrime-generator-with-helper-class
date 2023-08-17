<?php

// All the globally used general used function are put here

// Create a palindrome string and return it.
if (!function_exists('generatePalindrome')) {
    function generatePalindrome($input)
    {
        $reversedInput = strrev($input);
        $result = "Yes input text is a palindrome";
        if ($input != $reversedInput) {
            $result = "No input text is not a palindrome";
        }
        return $result;
    }
}

// Find the factorial of the given number and return it.
if (!function_exists('findFactorial')) {
    function findFactorial($input) {
        if ($input == 0 || $input == 1) {
            return 1;
        }
        return $input * findFactorial($input - 1);
    }
}
