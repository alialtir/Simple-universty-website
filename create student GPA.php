<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="username" name="name">
        <br>
        <input type="text" placeholder="ID" name="ID">
        <br>
        <input type="text" placeholder="GPA" name="GPA">
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
$GPA=$_POST["GPA"];
$query="INSERT INTO grade values('$name','$ID','$GPA')";
$con->query($query);
}
?>