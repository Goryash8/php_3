<!DOCTYPE html>
<html>
<head>
	<title>
		Php form
	</title>
</head>
<body>
	<?php 
		$re ="";
		if(!empty($_POST["name"]))
		{
			if(!preg_match("/abc../",$_POST["name"]))
			{
				$re="invalid format";
			}
		}
	?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
	<input type="text" name="name"/>
	<input type="submit" value="submit"/>
	<span><?php echo $re;?></span>
</form>
</body>
</html>