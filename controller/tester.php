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
    //$numrows=mysqli_num_rows($response);
    
     while($column=mysqli_fetch_array($response)){
        $id=$column['id'];
        $firstname=$column['firstname'];
		$lastname=$column['lastname'];
		$regdate=$column['reg_date'];
    }
    echo $id." ".$firstname." ".$lastname." ".$regdate;
			
?>
