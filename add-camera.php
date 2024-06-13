<?php
include 'db_conn.php';
if(isset($_POST['add_camera'])){
    
    $parking_id = $_POST['parking_id'];
    $cam_id = $_POST['cam_id'];
    $c_name = $_POST['cam_name'];
    $description = $_POST['description'];
    $RTSP = $_POST['RTSP'];

    if($c_name == "" || empty($c_name)){
        header('location:camera_admin.php?message=you need to fill up!');
    }

    else{

        $query = "insert into `camera` (`parking_id`, `cam_id`, `cam_name`, `description`, `RTSP` ) values ('$parking_id', '$cam_id', '$c_name', '$description', '$RTSP')";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed" .mysqli_error());
        }

        else{
            header('location:camera_admin.php?id='.$parking_id.'&insert_msg=added successfully');
        }
    }
}

?>