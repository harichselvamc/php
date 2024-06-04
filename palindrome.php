<?php
function isPalindrome($string) {
    // Remove spaces and make the string lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));
   
    // Reverse the string
    $reversedString = strrev($cleanedString);
   
    // Check if the original string is equal to the reversed string
    if ($cleanedString == $reversedString) {
        return true;
    } else {
        return false;
    }
}

// Test the function
$input = "A man a plan a canal Panama";
if (isPalindrome($input)) {
    echo "'$input' is a palindrome.";
} else {
    echo "'$input' is not a palindrome.";
}
?>