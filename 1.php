<html>
<body>
	<?php 
	$err1=$err2=" ";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
	if(empty(($_POST["Name"]))){
		$err1="name is requires";
	}
	if(empty(($_POST["email"]))){
		$err2="email is required";
	}
	else{
		if(!preg_match("/([a-z0-9]+@[a-z0-9]+\.[a-z]{2,3})/",$_POST["email"]))
		{
			$err2="invalid email";
		}
		}
	}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	echo"INPUT : <br>";
	echo "name" . $_POST["Name"] . "<br>";
	echo "email" . $_POST["email"] . "<br>";
}
	?>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
	Name: <input type="text" name="Name"/><span><?php echo $err1 ?> </span><br><br>
	Email: <input type="text" name="email" /><?php echo $err2 ?><br><br>
	<input type="submit" value="Submit"/>
	
</form>
</body>
</html>