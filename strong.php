<?php

if ($_POST["password"]) {
        $result = $_POST["password"];
        $lower = false ;
        $upper = false ;
        $number = false ;
        $special = false ;
        if(strlen($result)>=14){
            $result = str_split($result);
            foreach($result as $res){
                if(ctype_lower($res)){
                    $lower = true;
                }
                else if(ctype_upper($res)){
                    $upper = true;
                }
                else if(is_numeric($res)){
                    $number = true;
                }
                else {
                    $special = true;
                }
            }
            if($lower && $upper && $number && $special){
                echo 'strong';
            }
            else{
                echo 'weak';
            }
        }
    }
?>