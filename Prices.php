<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="src/mycss.css">


  <title>Price | <?php $date = date('d/m/y');
                  echo $date; ?> </title>
</head>

<body>


  <?php include 'includes/header.php' ?>
  <?php include 'includes/config.php' ?>

  <div class="jumbotron jumbotron-fluid" style="background-color: black;">
    <div class="container ">
      <h1 class="display-4" align="center"><span style="color:white;">Today</span><span style="color:red;">'s Price</span></h1>
      <p class="lead" align="center"> &nbsp;<span style="color:white;"> Date: <?php $date = date('d/m/y');
                      echo $date; ?> </span>
    </div>
  </div>



  <main role="main">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i1.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Aluminium</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=1";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG</p>
              <a href="Contact.php" class="btn btn-primary">Sell</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i2.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Steel</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=2";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG</p>
              <a href="Contact.php" class="btn btn-primary">Sell</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i3.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Copper</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=3";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG </p>
              <a href="Contact.php" class="btn btn-primary ">Sell</a>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="container c2">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 mar"align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i4.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Ferrous</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=4";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG </p>
              <a href="Contact.php" class="btn btn-primary">Sell</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i5.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Brass</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=5";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG </p>
              <a href="Contact.php" class="btn btn-primary">Sell</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mar" align="center">
          <div class="card" style="width: 18rem;">

            <img src="src/img/i6.jpg" class="card-img-top" alt="...">


            <div class="card-body">
              <h5 class="card-title">Plastic</h5>
              <p class="card-text">Price: <?php
                                    $sql = "select price from product where pid=6";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                      echo $row['price'];
                                    }
                                    ?> &#x20b9 / KG </p>
              <a href="Contact.php" class="btn btn-primary ">Sell</a>
            </div>
          </div>
        </div>
      </div>


    </div>




  </main>



















  <?php include 'includes/footer.php' ?>

  <script src="src/req.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>