<?php
    
    require_once("../model/conect.php");
    
    $firstN = $_POST['first_name'];
	$lastN = $_POST['last_name'];
	$pass = md5($_POST['password']);
    $email= $_POST['email'];
    
    $sql="insert into users (firstname,lastname,password,email) values ('".$firstN."','".$lastN."','".$pass."','".$email."');";
    //echo $sql;
    $result=mysqli_query($conection,$sql);
    
    if(!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
    else{
        echo 1;
    }
    
?>
