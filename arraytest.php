<?php

function hr(){echo '<hr>';}#<hr>-________________________________
function br($i){for($x=$i;$x>0;$x--)echo '<br>';} 

function text_header1(){    
    #-----------------------------------------------------------------
    echo '<b>Hola SICI 4997</b>';
    br(1);
    echo '<b>Intro a PHP - arrays</b>';
    #-----------------------------------------------------------------
    br(2);
 
    hr();
}

text_header1();

echo '<b>linea1</b>';
    br(1);
echo '<b>linea2</b>';
    
    $arr = ['enero', 'febrero', 'marzo', 'abril'];
echo '<pre>' . print_r($arr, true) . '</pre>';

$arr2 = ['Jan' => 'enero',
         'Feb' => 'febrero',
         'mar' => 'marzo',
         'abr' => 'abril'];

        
echo '--- Foreach 1 ---<br /><br />';
foreach($arr2 as $abr => $name) {
    echo "{$abr} = {$name}<br />";
}

br(1); 
    hr();
    
echo '--- Foreach 2 ---<br /><br />';
foreach($arr2 as $name) {
    echo "{$name}<br />";
}

br(1); 
    hr();
    
echo '--- For 1 ---<br /><br />';
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br />';
}


$employee = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];
echo '<pre>' . print_r($employee, true) . '</pre>';
      br(1); 
    hr();       
?>
<table border="1">
    <tr>
        <td><b>Field</b></td>
        <td><b>Value</b></td>
    </tr>
<?php

foreach ($employee as $f => $val) {
    /*if (is_array($val)) {
        $out = implode('; ', $val);
    }*/
    
    if (is_array($val)) {
        $out = '';
        
        foreach($val as $k => $v) {
            $out .= "(" . ($k + 1) . ") $v<br />";
        }
    } else {
        $out = $val;
    }
    
    echo "<tr>
        <td><b>$f</b></td>
        <td>$out</td>
    </tr>";
}
?>
    
</table>

?>
