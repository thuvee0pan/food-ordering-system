<!-- As a heading -->
<?php include('./server/server.php');
if(!isset($_SESSION['customer'])){
    header("location:index.php");	
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Get Order - SV FOods</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">SV Foods</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
    
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-dark bg-light" href="logout.php">Check Out</a>
          </li>
        </ul>
      </div>
     
  </nav>

  <main class="mt-5 container pt-5">
  <div> 
  <h4><span class="badge badge-primary">
          Name: 
            <?php
                echo $_SESSION['name']
            ?>
        </span></h4></div>
    </div>
  <div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">_ID</th>
      <th scope="col">Name</th>
      <th scope="col">category</th>
      <th scope="col">price</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  <?php
     getPizzaList()
    ?>
    
  </tbody>
</table>
  </div>

  </main>
</body>
</html>