<?php
    include "dbconnection.php";
    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $sql = "insert into user_login values('$userid', '$email', '".md5($password)."')";

    if(mysqli_query($connection, $sql))
    {
        echo '<script>';
        echo 'alert("Data insertion succesful");';
        echo 'window.location = "form.php";';
        echo '</script>';
    }
    else
        {
            echo '<script>';
            echo 'alert("Data insertion failed !");';
            echo 'window.location = "form.php";';
            echo '</script>';
        }
    
    ?>