1. First create two files in resources/views/
    a -> generate_palindrome.blade.php
    b -> palindrome_result.blade.php

2. Now create palindromeCntroller.php in app/Http/Controller/

3. Now create a pailindrome genrator function in app/PlaindromeGenerator.php file

4. Now update the routes/web.php 

5. Update the .json file 

    "autoload": {
        "classmap": [],
        "psr-4": {
            "App\\": "app/PalindromeGenerator"
        }
    }

