<?php
    
    require_once("../model/conect.php");
    
	$pass = md5($_POST['password']);
    $email= $_POST['email'];
    
    

    $sql="select * from users where password='".$pass."'and email='".$email."';";
    //echo $sql;
    //check if I was able to do the consult
    if($response=mysqli_query($conection,$sql))
				{
					//echo 1;
				}
				else{
					 echo "Error: " . $sql . "<br>" . mysqli_error($conection);
	}
    $numrows=mysqli_num_rows($response);
    
     while($column=mysqli_fetch_array($response)){
        $id=$column['id'];
        $firstname=$column['firstname'];
		$lastname=$column['lastname'];
		$regdate=$column['reg_date'];
    }
    
    
    session_start();

    if($numrows==1){
        $_SESSION["test"][1]=$id;
        $_SESSION["test"][2]=$firstname;
        $_SESSION["test"][3]=$lastname;
        $_SESSION["test"][4]=$email;
        $_SESSION["test"][5]=$pass;
        $_SESSION["test"][6]=$regdate;
        
        echo 1;
    } 
    else{
        echo 0;
    }

?>
