<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$ism = $_POST['ism'];
	setcookie('ism', $ism, time() + 60);
	echo "Your Cookie has been saved for 1 minute! <a href ='cookie.php'>Refresh</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<?php
if(isset($_COOKIE['ism'])){
	echo "<h2>Hi, ".$_COOKIE['ism']. "</h2>";
}else{
	echo '<form action="" method="POST">
		<label for="">Please, set your name here</label><br>
		<input type="text" name="ism" id="">
		<input type="submit" value="Send" id="">
	</form>';
}
    ?>
</body>
</html>
