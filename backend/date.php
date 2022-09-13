<?php
    $now = time();
    $your_date = strtotime("2022-12-25");
    $datediff = $now - $your_date;
    echo abs(round($datediff / (60 * 60 * 24)));
?>