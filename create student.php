<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
        <input type="text" placeholder="username" name="name"> 
        <br>
        <input type="text" placeholder="ID" name="ID">
        <br>
        <input type="Email" placeholder="Email" name="Email">
        <br>
        <input type="text" placeholder="phone" name="phone">
        <br>
        <input type="text" placeholder="level" name="level">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

include "connect.php";
if(isset($_POST['submit'])){
$name=$_POST["name"];
$ID=$_POST["ID"];
$Email=$_POST["Email"];
$phone=$_POST["phone"];
$level=$_POST["level"];
$query="INSERT INTO student values('$name','$ID','$Email','$phone','$level')";
$con->query($query);
}
?>