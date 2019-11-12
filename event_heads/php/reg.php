<?php

require 'config/conn.php';


// insert in database
$username_exist_err = "";
if(isset($_POST["submit"])){
    

$fname = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$policy = $_POST['city_town'];
$gender = $_POST['gender'];
$password = $_POST['psd'];
$password = $_POST['rpsd'];
$phone = $_POST['phone'];
    
// working on making directories
$break_email = explode("@",$email,2);
$user_dir = "uploads/".$break_email[0]."/";
    
$user_dir_post_pics = $user_dir . "post_pics";
$user_dir_profile_pics = $user_dir . "profile_pics";
    
    if($gender == "male"){
        $pro_pic = "uploads/male.png";
    }
    else{
        $pro_pic = "uploads/female.png";
    }

$sql = "INSERT INTO register_users (email, fname, password, gender, country, job, address, phone, read_policy, student, profile_pic) VALUES ('{$email}', '{$fname}', '{$password}', '{$gender}', '{$country}', '{$job}', '{$address}', '{$phone}', '{$policy}', '{$student}', '{$pro_pic}')";

$sql2 = "select * from register_users";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) == 0 ){
    
    if (mysqli_query($conn, $sql)) {
        // making user directory
        if(!is_dir($user_dir)){
            mkdir($user_dir);
            mkdir($user_dir_post_pics);
            mkdir($user_dir_profile_pics);
            echo "<br>directories created";
        }
        
        header('Location: http://localhost/c_ads/login.php');
        
    } else {
    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    }
} 
if (mysqli_num_rows($result2) != 0 ) {
    
    // checking for user existence
    while($row = mysqli_fetch_assoc($result2)) {
            if ($email == $row["email"]) {        

                //die("Already exists");
                $username_exist_err = "user already exists";
                return false;

            }
        }
    
    if (mysqli_query($conn, $sql)) {
        // making user directory
        if(!is_dir($user_dir)){
            mkdir($user_dir);
            mkdir($user_dir_post_pics);
            mkdir($user_dir_profile_pics);
            echo "<br>directories created";
        }
        
        setcookie("success", "success", time() + (86400 * 2), "/");
        
        header('Location: http://localhost/c_ads/login.php');
        
    } else {
    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
    }
}
}
mysqli_close($conn);
?>