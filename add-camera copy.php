<?php
include 'db_conn.php';
if(isset($_POST['add_camera'])){
if(isset($_POST['parking_id'])){
    
    $c_name = $_POST['cam_name'];
    $description = $_POST['description'];
    $RTSP = $_POST['RTSP'];
    $parking_id = $_POST['parking_id'];

    if($c_name == "" || empty($c_name)){
        header('location:admin-camera.php?message=you need to fill up!');
    }

    else{

        $query = "insert into `camera` (`cam_name`, `description`, `RTSP`, `parking_id` ) values ('$c_name', '$description', '$RTSP', '$parking_id')";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed" .mysqli_error());
        }

        else{
            header('location:admin-camera.php?insert_msg=added successfully');
        }
        }
    }
}

?>

