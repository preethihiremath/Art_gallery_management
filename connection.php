<?php
session_start();
$name="";
$email="";
$errors=array();
$orders=array();
$conn = mysqli_connect('localhost','root','','artgallery');

    if(isset($_POST['register'])){

        $name=$_POST['name'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];

        if(empty($name)){
            array_push($errors,"Username is empty");
        }
        if(empty($email)){
            array_push($errors,"Email cannot be empty");
        }
        if(empty($age)){
            array_push($errors,"Age cannot be  empty");
        }
        if(empty($phno)){
            array_push($errors,"Username is empty");
        }
        if($password != $confirm_password){
            array_push($errors,"Password doesnt match ");
        }

        if(strlen($password)<=6){
            array_push($errors,"Weak password");
        }
        if(count($errors) ==0){
            $password =md5($password);
            $sql1= "INSERT INTO customer VALUES (NULL,'$name','$phno','$age','$gender','$address','$email')";
            $sql2="INSERT INTO customer_login  VALUES('$email','$password')"; 
            mysqli_query($conn,$sql1);
            mysqli_query($conn,$sql2);
            header("location: login.php");
        }
    }

    if (isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        if(empty($email)){
            array_push($errors,"Email cannot be empty");
        }
        if(empty($password)){
            array_push($errors,"Password cannot be empty");
        }

        
        if(count($errors)== 0){
            $password =md5($password);
            $query="SELECT * from customer_login where email='$email' AND passwd='$password'";
            $query2="SELECT custID,name FROM customer where email='$email'";
            $result = mysqli_query($conn,$query);
            $result2=mysqli_query($conn,$query2);
            $rows=mysqli_num_rows($result);
            $rows2=mysqli_num_rows($result2);
            if($rows==1){
                if($rows2==1)
                {
                $_SESSION['name'] = $rows2["name"];
                $_SESSION['email']= $email;
                header("location: home.php");
                }
            }
            else {
            array_push($errors,"Username does not exit or password doesn't match");
            header("location: login.php");
            }

        }
    }
?>