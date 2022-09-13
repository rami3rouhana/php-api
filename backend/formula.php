<?php

if ($_POST["a"]&&$_POST["b"]&&$_POST["c"]) {
    function formula($a, $b, $c){
        $result = $a + $b*$c - $a/$b;
        return $result;
    }
    $data = formula($_POST["a"]^3,$_POST["b"],$_POST["c"]);
    echo $data;
}


?>