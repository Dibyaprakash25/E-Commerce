<?php
    include 'common.php';
    
    $email= mysqli_real_escape_string($con,$_POST["email"]);
    $name= mysqli_real_escape_string($con,$_POST["name"]);
    $password= mysqli_real_escape_string($con,$_POST["password"]);
    $contact= mysqli_real_escape_string($con,$_POST["phone"]);
    $city= mysqli_real_escape_string($con,$_POST["city"]);
    $address= mysqli_real_escape_string($con,$_POST["address"]);
    
    $hashed_password=md5($password);
    $query1="SELECT id FROM users WHERE email='$email' AND password='$hashed_password'";
    $query2="INSERT INTO users(name,email,password,phone,city,address) VALUES ('$name','$email','$hashed_password','$contact','$city','$address')";
    
    $result=mysqli_query($con,$query1);
    if(mysqli_num_rows($result)>0){
        echo 'Email id already exits.Try another email or login.';
    }else{
        $result=mysqli_query($con,$query2);
        $_SESSION["email"]=$email;
        $_SESSION["id"]=mysqli_insert_id($con);        
        header("location:login.php");
    }   
?>


