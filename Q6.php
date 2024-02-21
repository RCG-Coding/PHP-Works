<?php

$x = 5;

function superGlobal(){
    echo $GLOBALS['x'];
}

superGlobal();

?>