    <?php 
    include('header.php');
    include('db_conn.php');
 
    if(isset($_GET['id'])){
        $id = $_GET['id'];



        $query = "select * from `camera` where `cam_id` = '$id'";
        
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query Failed".mysqli_error());
        }
        else{

            $row = mysqli_fetch_assoc($result);  
    }
    }
  
    if(isset($_POST['update_camera'])){

        
        $id = $_POST['cam_id'];
        $c_name = $_POST['cam_name'];
        $c_description = $_POST['description'];
        $RTSP = $_POST['RTSP'];

        $query = "update `camera` set `cam_id`='$id', `cam_name`='$c_name', `description`='$c_description', `RTSP`='$RTSP' where `cam_id` = '$id'";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query Failed".mysqli_error());
        }
        else{
            header('location:camera_admin.php?id='.$id.'update_msg=Succesfully updated the data');
        }
    }

    ?>

    <div class="container mt-10">

    <h2> Update Parking Areas
    <a href="camera_admin.php?id=<?php echo $row['parking_id']; ?>" class ="btn btn-primary float-end"> Back</a>
    </h2>

            <form action ="" method="post">
                <div class="form-group">
                    <label for="cam_name">Name</label>
                    <input type="hidden" name="cam_id" class="form-control" value="<?php echo $row['cam_id']  ?>">
                    <input type="text" name="cam_name" class="form-control" value="<?php echo $row['cam_name']  ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="<?php echo $row['description'] ?>">
                </div>
                <div class="form-group">
                    <label for="RTSP">RTSP</label>
                    <input type="text" name="RTSP" class="form-control" value="<?php echo $row['RTSP'] ?>">
                </div>
                <input type="submit" class="btn btn-success" name="update_camera" value="Update">
            </form>
    </div>

    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>