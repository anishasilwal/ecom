<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class='container'>
<?php 
include 'includes/sidebar.php';
 ?>
 </div> 
 <?php 
 echo "<br><br>";
 ?>
<div class="row"><!-- 1st Row Start -->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrump">
            <li class="active">
            <i class="fa fa-fw fa-dashboard"></i> Dashboard
            </li>
        </ol> 
    </div>
</div><!-- 1st Row End -->

<div class="row"><!-- 2nd Row Start -->
    <div class="col-lg-3 col-md-6" ><!--col-lg-3 col-md-6 start -->
    <div class="panel panel-primary"><!-- panel panel-primary start -->
    <div class="panel-heading"><!--panel heading start-->
    <div class="row"><!--paanel heading row start-->
    <div class="col-xs-3"><!--col-xs-3 start-->
    <i class= "fa fa-tasks fa-5x"></i>
</div><!--col-xs-3 end-->
<div class="col-xs-9 text-right"><!-- col-xs-9 text-right starts -->
<div class="huge">12</div>
<div>Products</div>
</div><!-- col-xs-9 text-right ends -->
    </div><!--paanel heading row ends-->
    </div><!--panel heading ends-->
<a href="index.php?view_product">
    <div class="panel-footer"><!--panel-footer starts -->
    <span class="pull-left">View Details </span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div><!--Panel-footer-ends-->
</a>
</div><!-- panel panel-primary ends -->
</div><!--col-lg-3 col-md-6 ends -->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 starts -->
<div class="panel panel-green"><!--panel panel-green starts-->
<div class="panel-heading"><!--panel heading starts-->
<div class= "row"><!--panel heading row starts-->
<div class="col-xs-3"><!-- col-xs-3 starts-->
<i class="fa fa-comment fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!--col-xs-9 text-right start -->
<div class="huge">9</div>
<div>Customers</div>
</div><!--col-xs-9 text-right ends -->
</div>  <!--panel heading row ends -->
</div> <!--panel row ends-->
<a href="index.php?view_customer">
<div class="panel-footer"><!--panel-footer starts -->
    <span class="pull-left">View Details </span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div><!--Panel-footer-ends-->
</a>
</div><!--panel panel-green ends-->
</div><!--col-lg-3 col-md-6 ends -->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 starts -->
<div class="panel panel-yellow"><!--panel panel-yellow starts-->
<div class="panel-heading"><!--panel heading starts-->
<div class= "row"><!--panel heading row starts-->
<div class="col-xs-3"><!-- col-xs-3 starts-->
<i class="fa fa-shopping-cart fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!--col-xs-9 text-right start -->
<div class="huge">14</div>
<div>Product Categories</div>
</div><!--col-xs-9 text-right ends -->
</div>  <!--panel heading row ends -->
</div> <!--panel row ends-->
<a href="index.php?view_product_cat">
<div class="panel-footer"><!--panel-footer starts -->
    <span class="pull-left">View Details </span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div><!--Panel-footer-ends-->
</a>
</div><!--panel panel-yellow ends-->
</div><!--col-lg-3 col-md-6 ends -->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 starts -->
<div class="panel panel-red"><!--panel panel-red starts-->
<div class="panel-heading"><!--panel heading starts-->
<div class= "row"><!--panel heading row starts-->
<div class="col-xs-3"><!-- col-xs-3 starts-->
<i class="fa fa-support fa-5x"></i>
</div><!-- col-xs-3 end-->
<div class="col-xs-9 text-right"><!--col-xs-9 text-right start -->
<div class="huge">5</div>
<div>Orders</div>
</div><!--col-xs-9 text-right ends -->
</div>  <!--panel heading row ends -->
</div> <!--panel row ends-->
<a href="index.php?view_orders">
<div class="panel-footer"><!--panel-footer starts -->
    <span class="pull-left">View Details </span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    <div class="clearfix"></div>
    </div><!--Panel-footer-ends-->
</a>
</div><!--panel panel-red ends-->
</div><!--col-lg-3 col-md-6 ends -->
</div><!-- 2nd row ends-->
</div>


<script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>

</body>
</html>