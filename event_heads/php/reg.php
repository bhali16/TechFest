<?php

require 'config/conn.php';


// insert in database
$username_exist_err = "";
if(isset($_POST["submit"])){
    

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$city_town = $_POST['city_town'];
$gender = $_POST['gender'];
$psd = $_POST['psd'];
$rpsd = $_POST['rpsd'];
$phone = $_POST['phone'];
    
$sql = "INSERT INTO event_heads( name, email, password, phone, gender, address, city_town, e_id) VALUES ({$name},{$email},{$psd},{$phone},{$gender},{$address},{$city_town},{$fname},1)";

$sql2 = "select * from event_heads";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) != 0 ) {
    
    // checking for user existence
    while($row = mysqli_fetch_assoc($result2)) {
            if ($email == $row["email"]) {        

                //die("Already exists");
                $username_exist_err = "user already exists";
                header('Location: http://localhost/000/techfest/event_heads/register.php?username_exist_err=false');

            }
        }
    
    if (mysqli_query($conn, $sql)) {
                
        header('Location: http://localhost/000/techfest/event_heads/login.php?username_exist_err=true');
        
    } else {
    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    }
}
}
mysqli_close($conn);
?>