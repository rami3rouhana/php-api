<?php
// PHP code to check for Palindrome number in PHP
// Function to check for Palindrome

if( $_GET["string"]) {
    function Palindrome($string){
    if (strrev($string) == $string){ 
    return 1;
    }
    else{
    return 0;
    }
    }

    // Driver Code
    $original = $_GET["string"];
    if (Palindrome($original)){
    echo "Palindrome";
    }
    else {
    echo "Not a Palindrome";
    }
exit();

}


?>
