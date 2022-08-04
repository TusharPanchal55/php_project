
<html>
	<head>
		<title>World Tour</title>
        <style>
            form{
                background-color : orange;
                    width : 500px;
                    height : 330px;
                    margin : 50px 0px 0px 400px;
                    border-radius: 25px;
                    padding : 20px;
            }
			button {
				margin-right : 0px;
				width :  110px;
				height : 35px;
				background-color : darkred;
                color : white;
			}
			.btninput {
				width :105px; 
				height : 30px;
				margin-left : 350px;
				background-color : black;
				color : white;
			}
			input{
				background-color : #B2B8B8;
			}
        </style>
	</head>
		<body bgcolor = orangered>
		<br><br><br><br><br><br>
	<form align = "center" action ="#" method = "POST" autocomplete = "off">
    <br><br>
		<b><font size= 3 color= black>Please enter your login id</font><b>
		<br><br>
		<input type = "text" name = "login_id"  required>
		<br><br><br>
		<b><font size= 3 color= black>Please enter your password</font><b>
		<br> <br>
		<input type = "password" name = "password"  required>
		<br><br><br><br>
		<button type="submit" name ="register">Login</button>
		<br><br>
		<input type="reset" value = "Reset" class = "btninput">
	</form>
	</body>
</html>
<?php include ("first.php") ?>
<?php
	if (isset($_POST ['register']))
		{
			$logid = $_POST['login_id'];
			$pasw  = $_POST['password'];

			$query = "SELECT * FROM sign_up_page WHERE login = '$logid' && password ='$pasw'";
			$sqldata = mysqli_query($ins,$query);
			$rowno = mysqli_num_rows($sqldata);

			//echo "$rowno";
        }
        if ($rowno == 1) {
            echo "Congratulations You Have Logged In Successfully";
            header('location:http://localhost/php/Tours_homepage.php');
        }    
        else{
            echo "Invalid Login id or Password";
        }
?>
