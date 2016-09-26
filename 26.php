<?php
for($i=0;$i<20;$i++){
	$arr[]=rand(0,100);
	}
for($i=0;$i<count($arr);$i++){
	echo $arr[$i];
	echo ',';
	}
	echo '</br>';
	$sum_th = 0;
	$sum_odd = 0;
	
	for($i=0;$i<count($arr);$i++){
		if($i%2 ==0){
		$sum_th+=$arr[$i];
	
	}
		
	}
	echo '"th" - '.$sum_th . '</br>';
	for($i=0;$i<count($arr);$i++){
		if($i%2 !==0){
		$sum_odd+=$arr[$i];
	
	}
		
	}
	echo '"odd" - '.$sum_odd;
?>