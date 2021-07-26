<?php
session_start();
include('conn.php');
$AWID = $_GET["AWID"];
$sql="SELECT * FROM artwork where AWID='$AWID'";
$query=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($query);
$email=$_SESSION['email'];
if($rows>0)
{
    $sql2="SELECT * FROM customer where email='$email'";
    $query2=mysqli_query($conn,$sql2);
    $rows2=mysqli_num_rows($query2);
    if($rows2>0)
    {   
        $row1=$query->fetch_assoc();
        $row2=$query2->fetch_assoc();
        $awid=$AWID;
        $amt=$row1['price'];
        $cid=$row2['custID'];
        $sql3= "INSERT INTO orders(OID, AWID, amount,custID) VALUES(NULL,'$awid','$amt','$cid')";
        $query3=mysqli_query($conn,$sql3);
        header("location:orders.php");

    }
    else{
        header("location:art.php");
    }
}
else
{
    header("location:art.php");
}    
?>