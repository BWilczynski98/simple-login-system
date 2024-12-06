<?php

function dd(...$vals)
{
    foreach ($vals as $val) {
        echo "<pre>";
        var_dump($val);
        echo "</pre>";
    }
    die();
}