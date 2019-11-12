<?php 
session_start();
if(!isset($_SESSION["email"])){
    header('Location: http://localhost/000/techfest/admin/login.php');
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Widgets :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <style>
        .wid_blog{
            padding: 5px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
    <?php include('include/header.php');?>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="widget_head">Events</div>
		   <div class="widget_5">
		   	 <div class="col-md-3 widget_1_box2">
		   	 	<div class="wid_blog">
		   	 		<img class="img-responsive" style="width: inherit;" src="../imgaes/events_pic/assassins-creed.jpg">
		   	 	</div>
		   	 	<div class="wid_blog-desc">
		   	 		<div class="wid_blog-right">
		   	 			<h2>Title Name</h2>
		   	 			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
		   	 		</div>
		   	 		<div class="clearfix"> </div>
		   	 	</div>
             </div>
		     <div class="clearfix"> </div>
		   </div>
		   <?php include('include/footer.php');?>
	  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
