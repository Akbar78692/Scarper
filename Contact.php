<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/mycss.css">
    <title>Contact </title>
</head>
<body>
<?php include 'includes/header.php' ?>

<div class="jumbotron jumbotron-fluid" style="background-color: black;">
    <div class="container ">
      <h1 class="display-4" align="center"><span style="color:white;">Sell </span><span style="color:red;">Inquiry</span></h1>
    </div>
  </div>
  <div class="container c2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                           
                            <div class="card-body bg">
                            <form  name="contact" method="post" >
                                <div class="form-group">
                                        <label for="exampleInputEmail1"><span style="color:white;">Name</span></label>
                                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><span style="color:white;">Email address</span></label>
                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">                                        
                                    </div>
                                    <div class="form-group">
                                        
                                    <label for="exampleInputEmail1"><span style="color:white;">Select Matirial:</span> </label>
                                        <select class="form-control m2" id="choice" name="choice" aria-label="Default select example">
                                            <option selected  value="-1">Open this select menu</option>
                                            <option value="Aluminium">Aluminium</option>
                                            <option value="Steel">Steel</option>
                                            <option value="Copper">Copper</option>
                                            <option value="Ferrous">Ferrous</option>
                                            <option value="Brass">Brass</option>
                                            <option value="Plastic">Plastic</option>
                                        </select>
                                    </div>
                                        <div class="form-group">
                                        <label for="exampleInputEmail1"><span style="color:white;">Contact</span></label>
                                        <input type="text" class="form-control" name="contact" id="contact" aria-describedby="emailHelp" placeholder="Enter Contact">                                        
                                    </div>
                                    <button type="submit" onclick="return validateInq()" class="btn btn-primary">Submit</button>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="height: auto;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.5426134870554!2d70.80996111485959!3d22.295309448710277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5f077fc8585%3A0xd576633bf9f62425!2sIbrahim%20Steel%20Traders!5e0!3m2!1sen!2sin!4v1650967831017!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
       
                                <?php include 'includes/config.php'?>
                                <?php

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['choice'])&&isset($_POST['contact']))
{
    $username= $_POST['email'];  
    $name= $_POST['name'];  
    $choice= $_POST['choice'];  
    $contact= $_POST['contact'];  


    
      $sql = "insert into inq values('$name' ,'$username','$choice','$contact')";        
    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript"> alert("We will contact you soon....");</script>';
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    }


?> 
<?php include 'includes/footer.php' ?>


<script src="src/req.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>