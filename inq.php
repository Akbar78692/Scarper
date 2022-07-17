<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="src/mycss.css">
  <title>Inquiries</title>
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
  <?php include 'includes/config.php' ?>


  <section>
        
    <div class="jumbotron jumbotron-fluid" style="background-color: black;">
    <div class="container ">
      <h1 class="display-4" align="center"><span style="color:white;">Customer </span><span style="color:red;">Inquaries</span></h1>
    </div>
  </div>
        <!-- TABLE CONSTRUCTION-->
        <div class="table-responsive">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Material</th>
                <th>Contact</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
            
            
                $sql = "select * from inq";
                
                $result = $con->query($sql);
                    
            if($result->num_rows>0)
            {

            while($row =$result->fetch_assoc())
            {

                ?>
                <tr>

                <td><?php  echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['choice'];?></td>
                <td><?php echo $row['contact'];?></td>
               
                </tr>
                <?php
            }
        }
             ?>
        </table>
    </section>

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