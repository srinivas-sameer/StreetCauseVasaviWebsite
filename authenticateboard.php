<?php  
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "scv";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }      
    $username = $_POST['username'];  
    $password = $_POST['password'];
    $userid = $_POST['userid'];  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $userid = stripcslashes($userid);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
	$userid = mysqli_real_escape_string($con, $userid);  
      
        $sql = "select *from board where name = '$username' and password = '$password' and id = '$userid'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 2){  

            echo "<h1><center> Login successful </center></h1>";
            session_start();
	    $_SESSION["user"] = $username;
            header('Location: ./boardlog.html');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
