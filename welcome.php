<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="src/mycss.css">
  <title>ADMIN</title>
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
  <main role="main">


    <div class="jumbotron jumbotron-fluid" style="background-color: black;">
      <div class="container ">
        <h1 class="display-4" align="center"><span style="color:white;">Admin</span><span style="color:red;">'s Price</span></h1>
        <p class="lead" align="center"> &nbsp;<span style="color:white;"> Date: <?php $date = date('d/m/y');
                                                                                echo $date; ?> </span>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">


            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Aluminium</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=1";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG</p></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar " align="center">
          <div class="card" style="width: 18rem;">



            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Steel</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=2";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG</p></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar"align="center">
          <div class="card" style="width: 18rem;">



            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Copper</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=3";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG </p></span>
            </div>
          </div>
        </div>
      </div>


    </div>








    <div class="container c2">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 mar " align="center">
          <div class="card" style="width: 18rem;">



            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Ferrous</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=4";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG </p></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar " align="center">
          <div class="card" style="width: 18rem;">



            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Brass</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=5";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG </p></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">



            <div class="card-body bg bd">
              <h5 class="card-title"><span style="color:white;">Plastic</span></h5>
              <p class="card-text"><span style="color:red;">Price: <?php
                                                                    $sql = "select price from product where pid=6";
                                                                    $result = $con->query($sql);
                                                                    while ($row = $result->fetch_assoc()) {
                                                                      echo $row['price'];
                                                                    }
                                                                    ?> &#x20b9 / KG </p></span>
            </div>
          </div>
        </div>
      </div>


    </div>


    <div class="container c2">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3 mar" align="center">

          <div class="card-body">


            <a href="update.php" class="btn btn-primary">Update Prices</a>
          </div>
        </div>

        <div class="col-md-3 mar" align="center">

          <div class="card-body">


            <a href="add.php" class="btn btn-primary">Add User</a>
          </div>
        </div>
      

      <div class="col-md-3 mar" align="center">

        <div class="card-body">

        <a href="delete.php" class="btn btn-primary">Delete User</a>
        </div>
      </div>
      
      <div class="col-md-3 mar" align="center">

        <div class="card-body">


          <a href="inq.php" class="btn btn-primary">View Enquiries</a>
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

