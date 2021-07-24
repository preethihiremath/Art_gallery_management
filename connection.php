<?php
session_start();
$name="";
$email="";
$errors=array();
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

        if($password <=6){
            array_push($errors,"Weak password");
        }
        if(count($errors) ==0){
            $password =md5($password);
            $customer= "INSERT INTO customer(name, phno, age, gender, address, email) VALUES ('$name','$phno','$age','$gender','$address','$email')";
            $customer_login="INSERT INTO customer_login (email,password) VALUES('$email','$password')"; 
            mysqli_query($conn,$customer);
            mysqli_query($conn,$customer_login);
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
            $query="SELECT * from customer_login where email='$email' AND password='$password'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1){
                $_SESSION['name'] = $name;
                header("location: home.php");
            }
            else {
            array_push($errors,"Username does not exit or password doesn't match");
            header("location: login.php");
            }
        }
    }
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['name']);
        header('location: home.php');
    }
?>