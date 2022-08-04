<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sign_up";
$ins = mysqli_connect($servername,$username,$password,$database);
if($ins){
   // echo "Congratualtions ! your connection is successful";
}
else {
    echo "connection Failed!".mysqli_connect_error();
}
?>