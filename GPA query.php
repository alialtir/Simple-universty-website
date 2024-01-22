<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="ID" name="ID">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['submit'])){
$ID=$_POST["ID"];
$query="SELECT GPA,name FROM grade WHERE ID='$ID' ";
$result=$con->query($query);
$ali= mysqli_num_rows($result);
if($ali>0){
while($row =$result->fetch_assoc()){
    echo "<br>GPA : ".$row["GPA"]."</br>";
    echo "<br>Name : ".$row["name"]."</br>";
}

}
}

?>