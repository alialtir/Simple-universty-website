<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="stud_ID" name="stud_ID">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
$stud_ID=$_POST["stud_ID"];
$query="SELECT course_1,course_2,course_3,course_4 FROM registration WHERE stud_ID='$stud_ID' ";
$result=$con->query($query);
$ali= mysqli_num_rows($result);
if($ali>0){
while($row =$result->fetch_assoc()){
   echo "<br>course 1 : ".$row["course_1"]."</br>";
   echo "<br>course 2 : ".$row["course_2"]."</br>";
   echo "<br>course 3 : ".$row["course_3"]."</br>";
   echo "<br>course 4 : ".$row["course_4"]."</br>";
 
}

}
}

?>