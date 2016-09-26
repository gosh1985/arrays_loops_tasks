<?php
for($i=0;$i<6;$i++){
	$arr[]=rand(0,10);
	}
for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
	echo ',';
	}
	$max = $arr[0];
	$min = $arr[0];
	$index_max = 0;
	$index_min = 0; 
for($j=0;$j<count($arr);$j++){
	if($arr[$j]>$max){
		$max = $arr[$j];
		$index_max = $j;
	}
	if($arr[$j]<$min){
		$min = $arr[$j];
		$index_min = $j;
	}
	
}
echo'</br>';
echo '</br>'.' my Max ='.$max;
echo '</br>'.'my Min ='.$min;
echo '</br>';
echo '</br>'.'embeded Max ='. max($arr);
echo '</br>'.'embeded Max ='. min($arr);
echo '</br>';
$ma = array_search(max($arr),$arr);
 echo '</br>'.'Index of Max ='.$ma;
$mi = array_search(min($arr),$arr);
echo '</br>'.'Index of Min ='.$mi;
echo '</br>';
$arr[$mi] = $max;
$arr[$ma]=$min;

echo '</br>';
echo'With element chenge :'.'</br>';
for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
	echo ',';
	}
echo '</br>';
echo '</br>' . 'And again the same...';
$arr[$index_min]=$min;
$arr[$index_max] = $max;
echo '</br>';
for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
	echo ',';
	}



?>