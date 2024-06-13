    <!-- camera -->

    <?php include('db_conn.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $parking_id = $_GET['parking_id'];

    $query = "delete from `camera` where `cam_id` = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result) {
    die("Query Failed".mysqli_error());
    }

    else{
        header('location:camera_admin.php?id='.$parking_id.'&delete_msg= Deleted Successfully');
    }
    }

    ?>

    <!-- parking space -->


