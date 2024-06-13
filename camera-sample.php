   <html>   
   
   <?php include('header.php'); ?>
    <?php include('db_conn.php'); ?>


    
    <!-- camera container -->

        <div class="container mt-10">
            
    <h2> CAMERAS
    <a href="admin.php" class ="btn btn-primary float-end"> Back</a>
    </h2>

        <div class="box1">
            <button class ="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD CAMERA </button>
            </div>

        <div class="container">
        
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
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
                $query = "select * from `camera` ";
                
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
                    <td><a href="admin-camera.php?id=<?php echo $row['parking_id']; ?>" class="btn btn-primary">View</a></td>
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
        <form action="add-camera.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD PARKING AREA</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="cam_name" class="form-control">
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
            <input type="submit" class="btn btn-success" name="add_camera" value="ADD">
        </div>
        </div>
    </div>
    </div>
    </form>

    </div>


    <!-- parking space -->

    <div class="container mt-10">
            
    <h2> SPACES </h2>
                <div class="box1">
                    <button class ="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD PARKING SPACE </button>
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
                        $query = "select * from `camera` ";
                        
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
                            <td><a href="admin-camera.php?id=<?php echo $row['parking_id']; ?>" class="btn btn-primary">View</a></td>
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
                <form action="add-camera.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD PARKING AREA</h5>
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
                    <input type="submit" class="btn btn-success" name="add-space" value="ADD">
                </div>
                </div>
            </div>
            </div>
            </form>
            
            </div>
    </div>
    <?php include('footer.php'); ?>
    </body>


    </html>





    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>