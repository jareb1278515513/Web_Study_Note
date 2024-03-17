<?php
function a()
{
    static $x=0;
    echo $x;
    $x++;
    echo PHP_EOL;//换行符
}

a();
a();
a();
?>