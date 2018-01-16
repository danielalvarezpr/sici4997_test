<?php
function hr(){echo '<hr>';}#<hr>-________________________________
function br(){echo '<br>';} 

function text_header1(){    
    #-----------------------------------------------------------------
    echo '<b>Hola SICI 4997 - version 2.0.0!</b>';
    br();
    echo '<b>Intro a PHP - 2</b>';
    #-----------------------------------------------------------------
    br();
    echo 'ejemplo variable a = string y b = numerico';
    br();
    echo '$a = A';
    br();
    echo 'b = 2';
    br();
    echo $a = 'a';
    br();;
    echo $b = 1;
    br();
    echo 'is a string?' . is_string($a);
    br();
    echo 'is b string?' . is_string($b);
    br();
    hr();
}

text_header1();

function text_body1(){
    define('MUNICIPAL_TAX', 0.005);
    define('STATE_TAX', 0.11);
    
    $price = 25;
    $taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
    $taxes = round($taxes, 2);
    $total = $price + $taxes;
    
    echo "Item price: $price<br>";
    echo "Taxes: $taxes<br>";
    echo "Total: $total<br>";    
}
text_body1();

function showIVU($price, $desc = 'UNDEFINED'){
    hr();
    $price = 25;
    $taxes = calculateIVU($price);
    $taxes = round($taxes, 2);
    $total = $price + $taxes;
    
    echo "Name: <b>$desc</b><br>";
    echo "Item price: $price<br>";
    echo "Taxes: $taxes<br>";
    echo "Total: $total<br>";
    hr();
}
function calculateIVU($price){
    $taxes = ($price * (MUNICIPAL_TAX + STATE_TAX));
    $taxes = round($taxes, 2);
    return $taxes;
}
showIVU(9.99);
showIVU(5, 'Toilet Paper');
showIVU(1.99, 'Hand Sanitizer');

br();

$scope1 = 'hola';
function testScoping(){
    global $scope1;
    echo $scope1 . "<br>";    
}
testScoping();

br();

function isA($grade) {return ($grade >= 90);}
function show_isA(){
    echo 'isA 95? ' . isA(95) . '<br>';
    echo 'isA 100? ' . isA(100) . '<br>';
    echo 'isA 80? ' . isA(80) . '<br>';    
}
show_isA();
br();

function showDate($time = null){
    if ($time == null){
        $time = time();         
    }
    echo date('g:i:s a', $time);    
}

hr();
showDate();
br();
showDate(time() + 1);
hr();

function str_tests(){
    echo strrev('Omar') . '<br>';
    echo str_repeat("\xF0\x9F\x98\x81", 10) . '<br>';
    echo strtoupper('omar') . '<br>';
    echo strtolower('OMARjklfjLsqJ') . '<br>';
    echo str_replace('a', 'i', 'Me llamo Omar') . '<br>';
    echo str_replace(['a', 'e', 'o', 'u', 'A', 'E', 'O', 'U'], 'i', 'Me llamo Omar') . '<br>';
    echo ucfirst('OMAR') . '<br>';
    $name = 'OMaR';
    $fname = 'soto';
    echo ucfirst(strtolower($name)) . ' '. ucfirst(strtolower($fname)) . '<br>';    
}
str_tests();

hr();
echo '<pre>' . print_r($_GET, true) . '</pre></br>';
echo '<pre>' . print_r($_REQUEST, true) . '</pre></br>';

?>