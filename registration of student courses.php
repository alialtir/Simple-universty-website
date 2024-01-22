<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
        <input type="text" placeholder="stud_ID" name="stud_ID"> 
        <br>
        <input type="text" placeholder="course_1" name="course_1">
        <br>
        <input type="text" placeholder="course_2" name="course_2">
        <br>
        <input type="text" placeholder="course_3" name="course_3">
        <br>
        <input type="text" placeholder="course_4" name="course_4">
        <br>
       
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
$stud_ID=$_POST["stud_ID"];
$course_1=$_POST["course_1"];
$course_2=$_POST["course_2"];
$course_3=$_POST["course_3"];
$course_4=$_POST["course_4"];
$query="INSERT INTO registration values('$stud_ID','$course_1','$course_2','$course_3','$course_4')";
$con->query($query);
}
?>