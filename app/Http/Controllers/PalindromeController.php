<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    
    class PalindromeController extends Controller
    {
        public function generate(Request $request)
        {
            $input = $request->input('input_text');
            $palindrome = generatePalindrome($input);
            return view('palindrome_result', compact('palindrome'));
        }
    }


