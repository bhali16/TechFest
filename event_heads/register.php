<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
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
<body id="login">
  <div class="login-logo">
    <div style="width: 400px;height: 220px;margin-left: auto;margin-right: auto;background-color: rgba(0, 0, 0, 0.71)">
          <a href="#" ><img width="100px;" height="300px;" src="../imgaes/Tech%20Fest%20Final.png"/></a>
      </div>
  </div>
  <h2 class="form-heading">Event Heads Registeration</h2>
  <form class="form-signin app-cam" action="php/reg.php" method="post">
      <input required type="text" class="form-control1" name="name" placeholder="Full Name" autofocus="">
      <input required type="text" class="form-control1"  name="address" placeholder="Address" autofocus="">
      <input required type="text" class="form-control1"  name="email" placeholder="Email" autofocus="">
      <input required type="text" class="form-control1"  name="city_town" placeholder="City/Town" autofocus="">
      <div class="radios">
        <label for="radio-01" class="label_radio" >
            <input type="radio" checked="" value="male" name="gender"> Male
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio"  value="female" name="gender" > Female
        </label>
	  </div>
	  
      <input required name="psd" type="password" class="form-control1" placeholder="Password">
      <input required name="rpsd" type="password" class="form-control1" placeholder="Re-type Password">
      <input required type="text" class="form-control1"  name="phone" placeholder="Phone" autofocus="">
      <button class="btn btn-lg btn-success1 btn-block" name="submit" type="submit">Submit</button>
      <?php if(isset($_GET['pass'])){?>
        <span style="color:red">password not matched</span><br>
      <?php }?>
        <?php if(isset($_GET['user'])){?>
        <span style="color:red">email already exists</span>
      <?php }?>
      <div class="registration">
          Already Registered.
          <a class="" href="login.php">
              Login
          </a>
      </div>
  </form>
<?php include('include/footer.php');?>
</body>
</html>
