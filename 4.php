<html>
<head>
	<title>Php form</title>
</head>
<?php 
	if(isset($_POST["add"]))
    {
		if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
		$result= $_POST["value1"] + $_POST["value2"];
	}
	if(isset($_POST["sub"]))
    {
		if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
		$result= $_POST["value1"] - $_POST["value2"];
	}
	if(isset($_POST["mul"]))
    {
		if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
		$result= $_POST["value1"] * $_POST["value2"];
	}
	if(isset($_POST["div"]))
    {
		if(!empty($_POST["value1"]) || !empty($_POST["value2"]))
		$result= $_POST["value1"] / $_POST["value2"];
	}
?>
<body style="background-color:grey;">
	<h2 style="color:purple;">form with multple submit button</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>"method="POST">
		<table>
			<tr>
				<td>value1</td>
				<td><input type="text" name="value1"/></td>
			</tr>
			<tr>
				<td>value2</td>
				<td><input type="text" name="value2"/></td>
			</tr>
			<tr>
				<td>result</td>
				<td><input type="text" name="result" value="<?php if(isset($result)) echo $result;?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="add" name="add"/></td>
				<td><input type="submit" value="sub" name="sub"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="mul" name="mul"/></td>
				<td><input type="submit" value="div" name="div"/></td>
			</tr>
</table>
</form>
</body>
</html>