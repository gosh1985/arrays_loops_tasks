
<?php

function rc(){
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$color = array_rand($colors,1);
return $colors[$color];
//	echo 'style="background-color:'. $color .';"';

}

$rows = rand(2,20); // количество строк, tr
$cols = rand(2,20); // количество столбцов, td
function rn() {
	$r = rand(1,1000);
	return $r;
} 

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ // в этом цикле счётчик $tr 
    // следит за количеством строк и всегда равен текущему номеру строки.
    // То есть в начале $tr=1, так как в начале у нас 1 строка, затем
    // каждый раз прибавляем единицу, пока не дойдём до заданного количества
    // $rows.
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ // в этом цикле счётчик $td аналогичен
                                    // счётчику $tr.
        echo '<td style="background-color:'.rc().'">'.rn().'</td>';  //color:white
    }
    echo '</tr>';
}

echo '</table>';
?>
 
