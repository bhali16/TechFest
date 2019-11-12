
<?php 
session_start();
require 'config/conn.php';
$sql = "SELECT * FROM event_heads";
$result2 = mysqli_query($conn, $sql);

if(!isset($_SESSION["email"])){
    header('Location: http://localhost/000/techfest/admin/login.php');
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Forms :: w3layouts</title>
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
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
    <?php include('include/header.php');?>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs col-md-offset-3">
  	       <h3>Create Events</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" action="php/create_event.php" enctype="multipart/form-data">
								<div class="form-group">
									<div class="col-sm-8">
										<input required name="title" type="text" class="form-control1" id="focusedinput" placeholder="Event Title">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8"  style="height: 100px;">
                                        <textarea required name="dtn" class="form-control1" style="height: 100px;" placeholder="Description"></textarea>
									</div>
								</div>
                                <div class="form-group">
									<div class="col-sm-8"  style="height: 100px;">
                                        <caption>Start date</caption>
                                        <input required name="start_date" type="date" class="form-control1" id="focusedinput" placeholder="Event Title">
									</div>
								</div>
                                <div class="form-group">
									<div class="col-sm-8"  style="height: 100px;">
                                        <caption>End date</caption>
                                        <input required name="end_date" type="date" class="form-control1" id="focusedinput" placeholder="Event Title">
									</div>
								</div>
                                <div class="form-group">
									<div class="col-sm-8">
                                        <caption>Select Head Event</caption>
                                        <select name="head" class="form-control2" required>
                                            <option disabled selected>None</option>
<?php 
if (mysqli_num_rows($result2) != 0 ) {
    
    // checking for user existence
    while($row = mysqli_fetch_assoc($result2)) { ?>
            <option value="<?php print($row["id"]); ?>"><?php print($row["email"]); ?></option>
        <?php }
}
?>
                                            
                                        </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8">
                                        Event Image
										<input required name="fileToUpload" id="fileToUpload" type="file" class="form-control2">
									</div>
								</div>
                                <div class="form-group">
									<div class="col-sm-8">
										<input type="submit" name="submit" class="form-control1 btn btn-success1" value="Create">
									</div>
								</div>
							</form>
<?php if(isset($_GET["no_img"])){
    ?>
    <p class="login_fail" style="color:red;">File is not an image</p><br>
<?php } ?>
                            <?php if(isset($_GET["img_exists"])){
    ?>
    <p class="login_fail" style="color:red;">Sorry, file already exists</p><br>
<?php } ?>
                            <?php if(isset($_GET["large_img"])){
    ?>
    <p class="login_fail" style="color:red;">Sorry, your file is too large</p><br>
<?php } ?>
                            <?php if(isset($_GET["file_not_allowed"])){
    ?>
    <p class="login_fail" style="color:red;">Sorry, only JPG, JPEG, PNG & GIF files are allowed</p><br>
<?php } ?>
                            <?php if(isset($_GET["not_upload"])){
    ?>
    <p class="login_fail" style="color:red;">Sorry, there was an error uploading your file.</p><br>
<?php } ?>
						</div>
             </div>
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
