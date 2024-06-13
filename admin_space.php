<html>   

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <title>User Dashboard</title>
      <script type="text/javascript">
          function preventBack(){window.history.forward()};
          setTimeout("preventBack()",0);
          window.onunload=function(){null;}
          </script></head>
    <body>


    <header>

<img src="images/logo.png" alt="Startup Company Logo">
        <h1> <a href="index.php">NMSC</h1></a>
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
<nav>
        <a href="parkingArea.php" class="tbtn">Parking Areas</a>
        <a href="camera_admin.php?id=<?php echo $_GET['parking_id']; ?>" class="tbtn">Back</a>
    </nav>
</header>

    <?php include('db_conn.php'); ?>

    <!-- parking space -->

    <div class="container mt-10">
            
    <h2> SPACES </h2>
                <div class="box1">
                    <button class ="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD </button>
                    </div>
            
                <div class="container">
                
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
            
                        <?php
                        $query = "select * from `parking_space` where `cam_id` = " . $_GET['id'];
                        
                        $result = mysqli_query($conn, $query);
            
                        if(!$result){
                            die("query Failed".mysqli_error());
                        } 
                        else{
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
            
                        <tr>
                            <td><?php echo $row['cam_id']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><a href="admin_space.php?id=<?php echo $row['cam_id']; ?>&cam_id=<?php echo $_GET['id']?>" class="btn btn-primary">View</a></td>
                            <td><a href="admin_update.php?id=<?php echo $row['parking_id']; ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['parking_id']; ?>" class="btn btn-danger">Delete</a></td>
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
                echo "<h6>" .$_GET['insert_msg']."</h6>";
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
                <form action="add_space.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD PARKING SPACE</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                        <div class="form-group">
                            <label for="Camera">Camera</label>
                            <input type="text" name="space_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="RTSP">RTSP</label>
                            <input type="text" name="RTSP" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_space" value="ADD">
                </div>
                </div>
            </div>
            </div>
            </form>
            
            </div>
    </div>
   
    <?php include('footer.php'); ?>
    