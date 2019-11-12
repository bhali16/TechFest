<?php

require '../config/conn.php';

$email_pass_err = "";
print("adfasdf");
// insert in database
if(isset($_POST["submit"])){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM admin where email='{$email}' && password='{$password}' ";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);        
        // session start
        session_start();
        $_SESSION["email"]=$row['email'];
        
        header('Location: http://localhost/000/techfest/admin/index.php');
        
    } elseif (mysqli_num_rows($result) == 0) {
        // output data of each row
        
        header('Location: http://localhost/000/techfest/admin/login.php?q=fail');
            
        
    } else {
        echo "0 results";
    }
    print("adfasdf");
    
}  
mysqli_close($conn);
?>