
<!DOCTYPE html>
<html>
<head>
    <title>The web development competition</title>
    <link rel="stylesheet" type="text/css" href="event.css">
</head>
<body>
    
    <h2>The  Tech Fest </h2>

    <ul class="first_ul">
        <li class="active"><a class="active" href="event.html"  target="_blank">Home</a></li>
        
    </ul>





    <div class="wrappers">
        <div id="div1">
          <h1 style="color: white "  style="margin-left: 40px;" >YOU  HAVE SUCESSFULLY SIGNED UP!!!</h1><br>
          <h1 style="color: white "  style="margin-left: 40px;" >LOCATION :CONFERENCE ROOM  </h1><br>
          <h1 style="color: white "  style="margin-left: 40px;" >DATE :11/12/2019 </h1><br>
          


        </div>
    </div>

</body>
</html>
 <?php 
if(isset($_POST['submit']))
{
  
 $username= $_POST['name'];
$email= $_POST['email'];
$category=$_POST['category'];
    

    
    $connection=mysqli_connect('localhost','root','root','techfest');
    if($connection){
    
        echo "";
    }
    else
    {
        
        echo "Connection problem";
    }
    
  
    
    $query="INSERT INTO tech_fest_table(name,email,category)  VALUES ('$username','$email','$category')";
    $result=mysqli_query($connection,$query);
 
    
}





?>