<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$name=$_POST['name'];
$cat=$_POST['category'];
$price=$_POST['price'];
$AID=$_POST['AID'];
$ld=$_POST['loginid'];
$sql="INSERT INTO artwork values(NULL,'$name','$cat','$price','$AID','$ld')";
mysqli_query($conn,$sql);
header("location:admin-home.html");
mysqli_close($conn);
?>