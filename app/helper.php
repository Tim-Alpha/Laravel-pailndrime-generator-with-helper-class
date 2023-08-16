<?php

// All the globally used general used function are put here

// Create a palindrome string and return it.
if (!function_exists('generatePalindrome')) {
    function generatePalindrome($input)
    {
        $reversedInput = strrev($input);
        $palindrome = $input . $reversedInput;
        return $palindrome;
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