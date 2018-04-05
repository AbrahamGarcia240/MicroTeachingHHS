<?php
    
    require_once("../model/conect.php");
    
	$pass = md5($_POST['password']);
    $email= $_POST['email'];
    
    

    $sql="select * from users where password='".$pass."'and email='".$email."';";
    echo $sql;
    //$result=mysqli_query($conection,$sql);
    
    /*if(!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
    else{
        echo 1;
    }*/
    
?>
