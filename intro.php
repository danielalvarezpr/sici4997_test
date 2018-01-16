<?php
echo 'Hola SICI 4997! <br><br>'; 
echo 'Intro a PHP';

#Comentario
//Comentario
/* Hola
 * como estas
 */

 echo '<br>Hola<br>'; //saludando
 echo 'Como estas?<br>'; #Preguntando
 
 $nota = 'A';
 $promedio = 3.5;
 $notas = ['A', 'B','C','D','F']; //Array
 $temp = []; //array vacio
 
 echo 'Yo quiero en esta clase sacar ';
 echo $nota;
 echo ' para de esa forma tener un promedio de ';
 echo $promedio;
 
 //operadores
 
 $quizz = 7;
 $quizzTotal = 10;
 
 $promedioQuizz = ($quizz / $quizzTotal)*100;
 
 echo '<br> Saque en el quizz un promedio de: ';
 echo $promedioQuizz;
 echo ' %<br>';
 
 echo '<br> Después del bono, saque en el quizz: ';
 echo $promedioQuizz++;//70 pq incrementa al final
 echo ' %<br>';
 
 echo '<br> Después del bono, saque en el quizz: ';
 echo ++$promedioQuizz;//72 pq incrementa al principio mas el incremento del anterior
 echo ' %<br>';
 
 echo '5 + 6 = ';
 echo (5+6);
 echo '<br>';

 
 // operadores de asignacion
 
 $quince = 15;
 $quince /= 3; //5
 
 echo $quince . '<br>';
 $intro = 'Mi nombre es ';
 $intro .= 'Daniel';
 echo $intro . '<br>'; // . para concatenar
 
 $outcome = ($promedioQuizz > 80);
 echo 'Saque mas de 80 en el quizz? ' . $outcome . '<br>';

$outcome2 = ($promedioQuizz <= 80);
echo 'Saque menos de 80 en el quizz? ' . $outcome2 . '<br>';

//operadores logicos

$notaF = ($promedioQuizz < 60);
$notaD = ($promedioQuizz >= 60 && $promedioQuizz < 70);
$notaC = ($promedioQuizz >= 70 && $promedioQuizz < 80);
$notaB = ($promedioQuizz >= 80 && $promedioQuizz < 90);
$notaA = ($promedioQuizz >= 90);

echo '<br> Notas <br>';
echo 'Tiene A? ' . $notaA . '<br>';
echo 'Tiene B? ' . $notaB . '<br>';
echo 'Tiene C? ' . $notaC . '<br>';
echo 'Tiene D? ' . $notaD . '<br>';
echo 'Tiene F? ' . $notaF . '<br>';
?>