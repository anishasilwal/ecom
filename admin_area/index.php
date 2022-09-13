
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

   
<div id="wrapper"> 
<?php 
         
         ?>
        <div id="page-wrapper">
        
        <div class="container-fluid">
          <?php
          if(isset($_GET['dashboard'])){
            include 'dashboard.php';
            include 'includes/sidebar.php';
          }else{
            header("Location:login.php");
          }
          ?>
        </div>
    </div>
</div>
 
    

<script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>

</body>
</html>