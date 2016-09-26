<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  String Number: <input type="text" name="strnum">
  Number: <input type="text" name="num">
  <input type="submit">
  <?php echo '</br>'.'Thank!!!';?>
</form>

<?php
function getCountOfElem($str,$a){
	if(!is_string($str)){
		return false;
	}
	$clean_string = '';
	for($i=0;$i<strlen($str);$i++){
		if($str[$i]==$a){
			$clean_string.= $str[$i];
		}
	}
	return strlen($clean_string);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $number = $_POST['strnum']; 
	$x = $_POST['num']; 
    if (empty($number)) {
        echo "Field is empty..";
    } else {
        echo getCountOfElem($number,$x);
	}
}
?>
