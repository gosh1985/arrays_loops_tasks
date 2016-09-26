<?php
//$dat = date('m');

//echo $dat;
$mounth = date('m');
$arr = array('01'=>'янв ','02'=>'фев','03'=>'март','04'=>' апр ','05'=>'май','06'=>' июнь','07'=>' июль','08'=>' авг ','09'=>' сент ','10'=>' окт ','11'=>' нояб ','12'=>' дек ');
foreach ($arr as $month_num => $month_name){
	if($month_num == $mounth){
		echo '<strong>' ; 
	}
	echo $month_name . ',';
	echo '</strong>';
	
}
?>