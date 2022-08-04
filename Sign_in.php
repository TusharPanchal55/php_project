<?php include ("first.php"); ?>
<?php include ("data.php"); ?>

<html>
	<head>
		<title>World Tour</title>
        <style>
            body{
                background-color : darkslategray;
            }
            form{
                background-color : white;
                    width : 500px;
                    height : 360px;
                    margin : 50px 0px 0px 400px;
                    border-radius: 25px;
                    padding : 20px;
            }
			button {
				margin-right : 0px;
				width :  110px;
				height : 35px;
				background-color : #50C7C7;
                color : black;
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
            a{
                font-size : 15px;
            }
        </style>
	</head>
		<body>
		<br><br><br><br><br><br>
	<form align = "center" action ="#" method = "POST" autocomplete = "off">
		<b><font size= 3 color= black>Please enter your login id</font><b>
		<br><br>
		<input type = "text" name = "login_id"  required>
		<br><br>
		<b><font size= 3 color= black>Please enter your password</font><b>
		<br> <br>
		<input type = "password" name = "password"  required>
		<br><br>
		<b><font size= 3 color= black>Please enter your phone number here</font><b>
		<br><br>
		<input type = "number" name = "phone" >
		<br><br><br>
		<button type="submit" name ="register" value ="Sign In">Sign In</button>
		<br><br>
		<input type="reset" value = "Reset" class = "btninput">
        <br>
        <a href ="http://localhost/php/Login.php">Aldready have an account?</a>
	</form>
	</body>
</html>
