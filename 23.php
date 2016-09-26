<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Number: <input type="text" name="num">
  <input type="submit">
  <?php echo '</br>'.'Thank!!!';?>
</form>

<?php
function getDigitSum($str){
	if(!is_string($str)){
		return false;
	}
	$sum = 0;
	foreach(str_split($str)as $val){
		$sum+=(int)$val;
	}
	return $sum;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $number = $_POST['num']; 
    if (empty($number)) {
        echo "Field is empty..";
    } else {
        echo getDigitSum($number);
	}
}
?>

</body>
</html>