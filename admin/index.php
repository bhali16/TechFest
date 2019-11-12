<?php 
session_start();
require 'config/conn.php';
if(!isset($_SESSION["email"])){
    header('Location: http://localhost/000/techfest/admin/login.php');
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../imgaes/Tech%20Fest%20Final.png">
    <style>
        .top_center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include('include/header.php');?>
        <div id="page-wrapper">
        <div class="graphs">
            <caption><h2>Recent Events</h2></caption>
     	<div class="col_3">
            <?php 
$sql = "SELECT * FROM events";
$result2 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result2) != 0 ) {
    
    // checking for user existence
    while($row = mysqli_fetch_assoc($result2)) { ?>
            <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <img class="pull-left img-rounded img-responsive" src="<?php print($row["img"]); ?>" style="margin-right:3px;">
                    <div class="stats">
                      <h5><strong><?php print($row["title"]); ?></strong></h5>
                      <span>Start <?php print($row["start_date"]); ?></span>
                    <span>End <?php print($row["end_date"]); ?></span>
                    </div>
                </div>
        	</div>
        <?php }
}
?>
      </div>
            <div class="row">
                <div class="col-md-2" style="margin-top: 20px;"><caption><h2>Users</h2></caption></div>
                <div class="col-md-8" style="margin-top: 20px;">
                    <form action="#" class="form-inline">
                        <input class="form-control1 bg-primary" type="text" placeholder="Find user with email" name="user_search">
                        <button class="btn btn-block btn-primary" type="submit">Find</button>
                    </form>
                </div>
            </div>
    <div class="content_bottom">
     <div class="col-md-12 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Participate</th>
                </tr>
		      </thead>
		      <tbody>
		        <tr class="active">
		          <th scope="row">1</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		      </tbody>
		    </table>
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
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
