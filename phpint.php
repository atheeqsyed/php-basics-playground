<?php
function debug($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

$x = 5985;
debug($x);
?>
