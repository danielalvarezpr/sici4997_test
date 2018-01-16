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

$names=[];
$employee = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];


$employees=[];
$employees[] = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];

$employees[] = ['name' => 'Omar2',
             'age' => 272,
             'town' => 'Ponce2',
             'gpa' => 1.52,
             'skills' => ['PHP2',
                          'Java2',
                          'JavaScript2'
                          ],
             ];             

echo '<pre>' . print_r($employees, true) . '</pre>';
br(2);
hr();
echo print_r($employee, true);
br(2);
hr();
echo implode('; ', $employee['skills']) . '<br />';

?>
