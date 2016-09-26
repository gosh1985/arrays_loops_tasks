<?php
$arr = array("Monday" => "Понедельник",
 "Mon" => "Пн",
 "Tuesday" => "Вторник",
 "Tue" => "Вт",
 "Wednesday" => "Среда",
 "Wed" => "Ср",
 "Thursday" => "Четверг",
 "Thu" => "Чт",
 "Friday" => "Пятница",
 "Fri" => "Пт",
 "Saturday" => "Суббота",
 "Sat" => "Сб",
 "Sunday" => "Воскресенье",
 "Sun" => "Вс",);
 $day = date('w');
 //echo $day;
 $week=array(0=>"вс", "пн","вт","ср","чт","пт","сб");
 foreach($week as $day_num=>$day_name){
	 if($day_num ==0 || $day_num == 6){
		 echo '<strong style = "color:red">';
	 }
	 echo $day_name . ','.' ';
	 echo '</strong>';
 }
 
?>