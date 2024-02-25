<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT FORM</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GET/POST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#form.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- conecting to the database  -->



<?php
// Check if form is submitted
if($_SERVER['REQUEST_METHOD']=="POST"){
    // Assign values from POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact form"; // Ensure this matches your database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    // if(!$conn){
        
    //     die("Sorry we failed to connect ".mysqli_connect_error());
    // } else {
    //     echo "Connection was made successfully";
    // }

    // SQL query to insert data into the 'contacts' table
    $sql = "INSERT INTO `contacts` (`NAME`, `EMAIL`, `CONCERN`) VALUES ('$name', '$email', '$desc')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if query executed successfully
    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'; 
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong> Your entry COULD NOT BE submitted. Sorry for the inconvenience.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'.mysqli_error($conn);
    }
}
?>




<!-- <div class="container mt-6">
<h2>Contact Us</h2>
<form action= " /sumit/form.php" method="POST" >
  <div class="mb-3 " >
    <label for="name" class="form-label">Name </label>
    <input type="text" class="form-control" id="name" aria-describedby="name">
   
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInput">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
  <label for="desc" class="form-label">Description</label><br>
  <textarea class=" form control"  id="desc name="textarea" id="textarea" cols="80" rows="10"></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> -->
<div class="container mt-6">
  <h2>Contact Us for your concern</h2>
  <form action="/sumit/form.php" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="form-group">
      <label for="desc" class="form-label">Description</label><br>
      <textarea class="form-control" id="desc" name="desc" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


  </body>
</html>