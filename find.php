<?php include 'includes/config.php'?>
<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    $username= $_POST['email'];  
    $password= $_POST['password'];  
    $sql = "select * from user where mail = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  

    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);  
    

    if($count == 1){  
        $_SESSION["start"] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION["expire"] = $_SESSION["start"] + (30 * 60);
        $_SESSION["id"] = $row['mail'];
        if(isset($_SESSION["id"])) {
            header("Location: welcome.php");
            }
    }  
    else{  
        
        echo '<script type="text/javascript"> alert("wrong email or password...");
        window.location.href="login.php";</script>';
      
    }     

}
  
 
   
   
  
    
?>  
<script src="src/req.js"></script>