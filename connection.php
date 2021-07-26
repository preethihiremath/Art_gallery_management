<?php
session_start();
$name="";
$email="";
$errors=array();
$conn = mysqli_connect('localhost','root','','artgallery');

function validate_mobile($mobile)
{
    return preg_match('/^[6-9]\d{9}$/', $mobile);
}

    if(isset($_POST['register'])){
        $name=$_POST['name'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];

        $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';
        
        $regex_ph= '/^[0-9]+$/';
        
        if(empty($name)){
            array_push($errors,"Username cannot be empty");
        }
        if(empty($email)){
            array_push($errors,"Email cannot be empty");
        }
       
        $query="SELECT email from customer where email='$email'";
        $res = mysqli_query($conn,$query);

        if(mysqli_num_rows($res)==1){
            array_push($errors,"Email Already exist.");
            header("location: login.php");
        }
        if(empty($age)){
            array_push($errors,"Age cannot be empty");
        }
        if(empty($phno)){
            array_push($errors,"Username is empty");
        }
        if (!preg_match($regex_email, $email) || !preg_match($regex_ph, $phno)) {
            array_push($errors,"Invalid phone number or email");
        }

        if($password != $confirm_password){
            array_push($errors,"Password doesn't match Try Again!!");
        }

        if(strlen($password)<=6){
            array_push($errors,"Weak password Make it Stronger");
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