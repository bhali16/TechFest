<?php

require '../config/conn.php';


$success = "";
$sql = "";
$select_post_img = "";
$err0 = $err1 = $err2 = $err3 = $err4 =$err5 = $err6 = "";
$post_success = "";
if(isset($_POST["submit"])){
    
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $err0 = "File is not an image.";
        header('Location: http://localhost/000/techfest/admin/create_event.php?no_img=1');
    return;
        $uploadOk = 0;
    }
    
// Check if file already exists
if (file_exists($target_file)) {
    $err1 = "Sorry, file already exists.";
    header('Location: http://localhost/000/techfest/admin/create_event.php?img_exists=1');
    return;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > (2*1024*1024)) {
    $err2 = "Sorry, your file is too large.";
    header('Location: http://localhost/000/techfest/admin/create_event.php?large_img=1');
    return;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $err3 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    header('Location: http://localhost/000/techfest/admin/create_event.php?file_not_allowed=1');
    return;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $err4 = "Sorry, your file was not uploaded.";
    header('Location: http://localhost/000/techfest/admin/create_event.php?not_upload=1');
    return;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $err5 = "The file has been uploaded.";
        
    } else {
        $err6 = "Sorry, there was an error uploading your file.";
        header('Location: http://localhost/000/techfest/admin/create_event.php?not_upload=1');
    return;
    }
}
//....................................................................................
    if($uploadOk == 1){
        $title = $_POST['title'];
        $dtn = $_POST['dtn'];
        $head = $_POST['head'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];


        $sql = "INSERT INTO events (title, description, head, img, start_date, end_date) VALUES ('{$title}', '{$dtn}', '{$head}', '{$target_file}', '{$start_date}','{$end_date}')";

        if (mysqli_query($conn, $sql)) {

            $post_success = "yes";
            header('Location:  http://localhost/000/techfest/admin/Events.php?event_success=1');
            return;

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
    }
        
//....................................................................................     
    }
    else{
        $select_post_img = "no";
    }
mysqli_close($conn);
?>