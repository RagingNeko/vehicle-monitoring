<?php
include 'db_conn.php';
if(isset($_POST['add_space'])){

    $cam_id = $_POST['cam_id'];
    $p_status = $_POST['status'];
    $description = $_POST['description'];
    $RTSP = $_POST['RTSP'];

    if($p_status == "" || empty($p_status)){
        header('location:admin_space.php?message=you need to fill up!');
    }

    else{

        $query = "insert into `parking_space` (`cam_id`, `status`) values ('$cam_id', '$p_status')";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed" .mysqli_error());
        }

        else{
            header('location:admin-camera.php?insert_msg=added successfully');
        }
    }
}

?>