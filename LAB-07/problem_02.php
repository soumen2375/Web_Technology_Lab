<?php 
    $myname = $_POST['myname'];
    $mygender = $_POST['gender'];
    $mydob = $_POST['dob'];
    $mycountry = $_POST['country'];
    $mycolor = $_POST['color'];
    $myfood = $_POST['food'];
    $myincome = $_POST['income'];

     echo"<h3><center>Your Data</u></center></h3>";
     echo"
     <table>
        <tr>
            <td>NAME: </td>
            <td>$myname </td>
        </tr>
        <tr>
            <td>GENDER: </td>
            <td> $mygender </td>
        </tr>
        <tr>
            <td>DOB: </td>
            <td> $mydob </td>
        </tr>
        <tr>
            <td>COUNTRY: </td>
            <td> $mycountry </td>
        </tr>
        <tr>
            <td>COLOR: </td>
            <td> $mycolor </td>
        </tr>
        <tr>
            <td>FOODS: </td>
            <td> $myfood </td>
        </tr>
        <tr>
            <td>INCOME: </td>
            <td> $myincome </td>
        </tr>
     </table>
     ";

?>