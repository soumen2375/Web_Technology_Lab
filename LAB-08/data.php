<?php
    include "dbconnection.php";
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $st_code = $_POST["student_code"];
    $email = $_POST["email"];
    $ph_no = $_POST["ph_no"];
    $degree = $_POST["degree"];
    $year = $_POST["year"];

    $sql = "insert into ds_2022 values('$first_name', '$middle_name', '$last_name', '$st_code', '$email', '$ph_no', '$degree', '$year')";
    if(mysqli_query($connection, $sql))
    {
        echo '<script>';
        echo 'alert("Data insertion succesful");';
        echo 'window.location = "index.php";';
        echo '</script>';
    }
    else
        {
            echo '<script>';
            echo 'alert("Data insertion succesful");';
            echo 'window.location = "index.php";';
            echo '</script>';
        }
    
    ?>