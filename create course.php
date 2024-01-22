
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="course name" name="name">
        <br>
        <input type="text" placeholder="course code" name="code_sub">
        <br>
        <input type="text" placeholder="Certified hour" name="hours">
        <br>
        <input type="text" placeholder="level" name="level">
        <br>
        <input type="text" placeholder="parent sub" name="parent_sub">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
$name=$_POST["name"];
$code_sub=$_POST["code_sub"];
$hours=$_POST["hours"];
$level=$_POST["level"];
$parent_sub=$_POST["parent_sub"];
$query="INSERT INTO courses values('$code_sub','$name','$hours','$level','$parent_sub')";
$con->query($query);
}
?>