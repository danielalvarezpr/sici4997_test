<?php

function hr(){echo '<hr>';}#<hr>-________________________________
function br($i){for($x=$i;$x>0;$x--)echo '<br>';} 

function text_header1(){    
    #-----------------------------------------------------------------
    echo '<b>Hola SICI 4997</b>';
    br(1);
    echo '<b>Intro a PHP - arrays 2</b>';
    #-----------------------------------------------------------------
    br(2); 
    hr();
}

text_header1();

class Person{
    public $firstName;
    public $lastName1;
    public $lastName2;
    public $dateOfBirth;
    
    public function __construct($firstName = '', $lastName1 = '',$lastName2 = '',$dateOfBirth = ''){
        $this->firstName = $firstName;
        $this->lastName1 = $lastName1;
        $this->lastName2 = $lastName2;
        $this->dateOfBirth = $dateOfBirth;
        
        
    }
    
}

$a = new Person();
$a->firstName = 'Daniel';
$a->lastName1 = 'Alvarez';
$a->lastName2 = 'Santiago';
$a->dateOfBirth = '15/feb/1996';

echo '<pre>' . print_r($a, true) . '</pre>';
br(2); 
hr();

$b = new Person('daniel', 'alvarez', 'santiago', '15/feb/1996');


echo '<pre>' . print_r($b, true) . '</pre>';
br(2); 
    hr();

?>
