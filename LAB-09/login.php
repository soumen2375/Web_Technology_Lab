<?php
    include "dbconnection.php";

    $loginuser=$_POST['userid'];
    $loginpass=$_POST['password'];

    $sql="select * from user_login where userid='$loginuser' and password='".md5($loginpass)."' ";
    $result=mysqli_query($connection, $sql);
    $myrow=mysqli_num_rows($result);
    if($myrow==1)
    {
        echo '<script>';
        echo 'alert("Login Successfully");';
        echo 'window.location = "form.php";';
        echo '</script>';
    }
    else
        {
            echo '<script>';
            echo 'alert("Enter valid details !");';
            echo 'window.location = "form.php";';
            echo '</script>';
        }

?>