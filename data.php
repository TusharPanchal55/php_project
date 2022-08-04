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