<?php
function hr(){echo '<hr>';}#<hr>-________________________________
function br(){echo '<br>';} 

function text_header1(){    
    #-----------------------------------------------------------------
    echo '<b>Hola SICI 4997 - version 3.0.0!</b>';
    br();
    echo '<b>Intro a PHP - 3</b>';
    #-----------------------------------------------------------------
    br();
    br();
    hr();
}

text_header1();

echo '<pre>' . print_r($_POST, true) . '</pre>';

br();


?>
