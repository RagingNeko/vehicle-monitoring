    
    <html>
    <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <title>User Dashboard</title>
        <script type="text/javascript">
          function preventBack(){window.history.forward()};
          setTimeout("preventBack()",0);
          window.onunload=function(){null;}
        </script>
    </head>

    <header>

<img src="images/logo.png" alt="Startup Company Logo">
        <h1> <a href="index.php">NMSC</h1></a>
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
<nav>
        <a href="parkingArea.php" class="tbtn">Parking Areas</a>
  
    </nav>
</header>

    <body>
    <a href="admin.php?" class="tbtn">Back</a>
    
    
    <?php 
include('db_conn.php');

$id = $_GET['id'];
$query = 'select * from `parking_area` where `parking_id` = ' . $id;

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error());
} else {
    while ($row = mysqli_fetch_assoc($result)) {
?>
    <h2>
        <td><?php echo $row['name']; ?></td>
    </h2>
<?php
    }
}
?>
        <!-- camera -->

        <div class="container mt-10">
    <div class="box1">
    <h2>CAMERAS</h2>
        <button class ="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD</button>
        </div>

    <div class="container">

        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>Camera</th>
                <th>Name</th>
                <th>Description</th>
                <th>RTSP</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            <?php

                $query = "select * from `camera` where `parking_id` = " . $_GET['id'];
                
                $result = mysqli_query($conn, $query);

                if(!$result){
                    die("query Failed".mysqli_error());
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                
                        ?>

                <tr>
                    <td><?php echo $row['cam_id']; ?></td>
                    <td><?php echo $row['cam_name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['RTSP']; ?></td>
                    <td><a href="admin_space.php?id=<?php echo $row['cam_id']; ?>&parking_id=<?php echo $_GET['id']?>" class="btn btn-primary">View</a></td>
                    <td><a href="camera_update.php?id=<?php echo $row['cam_id']; ?>&parking_id=<?php echo $_GET['id'];?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete_camera.php?id=<?php echo $row['cam_id']; ?>&parking_id=<?php echo $_GET['id'];?>" class="btn btn-danger">Delete</a></td>
                </tr>

                        <?php
                    }
                }

                ?>

            </tbody>

        </table>
        </div>
        <?php

                if(isset($_GET['message'])){
                    echo "<h6>" .$_GET['message']."</h6>";
                }
        ?>

    <?php

    if(isset($_GET['insert_msg'])){
        echo "<h5>" .$_GET['insert_msg']."</h5>";
    }
    ?>

    <?php

    if(isset($_GET['update_msg'])){
        echo "<h6>" .$_GET['update_msg']."</h6>";
    }
    ?>

    <?php

    if(isset($_GET['delete_msg'])){
        echo "<h6>" .$_GET['delete_msg']."</h6>";
    }
    ?>


        <!-- Modal -->
        <form action="add-camera.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD CAMERA</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

                <div class="form-group">
                <input type="hidden" name="parking_id" value="<?php echo $_GET['id'];?>"class="form-control">
                    <label for="name">Name</label>
                    <input type="text" name="cam_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="barangay">RTSP</label>
                    <input type="text" name="RTSP" class="form-control">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name="add_camera" value="Submit">
        </div>
        </div>
    </div>
    </div>
    </form>


    </div>

    </body>
    <script src="admin.js"></script>

    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </html>