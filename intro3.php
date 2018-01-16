<?php
include_once 'config.php';

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

echo '<pre>' . print_r($_GET, true) . '</pre>';

if (isset($_GET['price'])){
    $price = $_GET ['price'] * 5;
    echo "price x 5: $price"; 
}
else{
    echo "price not set";
}

br();

hr();

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

/*
if(empty($page){
    $page = 'home';
}

if ($page == 'home'){
    echo 'welcome!';
}
else if($page == 'form'){
    include 'form.php';
    
}
else {
    echo 'nothing selected';
}
*/

hr();


switch ($page) { //estructura case - case = if / default = else
   case 'home':
       echo 'you selected home';
       break;
   case 'form':
       include 'form.php';
       break;
   default:
       echo 'You didnt select any page';
       break;   
}

hr()    ;

$i = 0;
echo '<select>';
while ($i++ < 20){
    $sel = ($i == 5) ? ' selected' : '';
    echo "<option$sel>Option $i</option><br>";
    
}
echo '</select>';



?>
