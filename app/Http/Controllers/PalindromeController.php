<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\PalindromeGenerator;
    
    class PalindromeController extends Controller
    {
        public function generate(Request $request)
        {
            $input = $request->input('input_text');
            $palindrome = PalindromeGenerator::generatePalindrome($input);
    
            return view('palindrome_result', compact('palindrome'));
        }
    }


