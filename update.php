<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/mycss.css">
    <title>Admin Login</title>
</head>
<body>
   

    <?php
    session_start();

    if (!isset($_SESSION["id"])) {
      echo '<script type="text/javascript"> alert("Login First....");
window.location.href="login.php";</script>';
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION["expire"]) {
            session_destroy();
            echo '<script type="text/javascript"> alert("Session is expired you need to login again....");
            window.location.href="login.php";</script>';
           
        }
        else { 
?>
 <?php include 'includes/header.php' ?>
    <div class="jumbotron jumbotron-fluid" style="background-color: black;">
    <div class="container ">
      <h1 class="display-4" align="center"><span style="color:white;">Update </span><span style="color:red;">Data</span></h1>
    </div>
  </div>
    
            <div class="container c2">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card">
                            <div class="card-body bg">
                                <form action="" name="my" id="myform" method="post" >
                                    <div class="form-group">
                                        
                                    
                                <select class="form-control m2" id="choice" name="choice" aria-label="Default select example">
                                    <option selected  value="-1">Open this select menu</option>
                                    <option value="1">Aluminium</option>
                                    <option value="2">Steel</option>
                                    <option value="3">Copper</option>
                                    <option value="4">Ferrous</option>
                                    <option value="5">Brass</option>
                                    <option value="6">Plastic</option>
                                </select>

                                    <div class="form-group">
                                        <label><span style="color:white; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Price: </span></label>

                                        <input type="text"  id="price" class="form-control" name="price">
                                    </div>

                    
                                    <button type="submit" onclick="return validate()" class="btn btn-primary">Submit</button>
                                    
          </div>
                                </form>
                                <?php include 'includes/config.php'?>
<?php

if(isset($_POST['choice']) && isset($_POST['price']))
{
    $chc=$_POST['choice'];  
    $prc=$_POST['price'];  

    
    $sql = "update product set price = '$prc' where pid='$chc'";  
    

    if (mysqli_query($con, $sql)) {
       
        echo '<script type="text/javascript"> alert("Sucessfully Updated");</script>';
      
      
    
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
  
    //to prevent from mysqli injection  
   
    }
  
    
?>  

 

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'includes/footer.php' ?>


            <?php
        }
    }
?>
       

<script src="src/req.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
