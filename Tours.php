<?php include ("first.php"); ?>
<html>
	<head>
		
		<title>World Tour</title>
	</head>
		<body bgcolor=maroon>
		<fieldset>
		<h1 align = center> <font color = white>WORLD TOURS AND TRAVELS</font></h1>
		</fieldset>
		<br><br><br><br><br><br>
	<form align = "center" action ="#" method = "POST" >
		<b><font size= 3 color= white>Please enter your login id</font><b>
		<br><br>
		<input type = "text" name = "login_id"  required>
		<br><br>
		<b><font size= 3 color= white>Please enter your password</font><b>
		<br> <br>
		<input type = "password" name = "password"  required>
		<br><br>
		<b><font size= 3 color= white>Please enter your phone number here</font><b>
		<br><br>
		<input type = "number" name = "phone" >
		<br><br><br>
		<button type="submit" name ="register">Submit</button>	
	</form>
	</body>
</html>

<?php
	if (isset($_POST['register']))
	{
		$login = $_POST['login_id'];
		$pwd = $_POST['password'];
		$phno = $_POST['phone'];
		
		$query = "INSERT INTO sign_up_page values('$login','$pwd','$phno')";
		$data = mysqli_query($ins,$query);
		if ($data)
		{
			echo "data added successfully";
		}
		else {
			echo "error in data submission";
		}
	}
?>