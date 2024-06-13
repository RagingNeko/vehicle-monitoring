<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <label for="name">Name</label>
    <input type="text" class="form-control">
         
    <input type="submit">

    <?php 
    
    if(isset($_POST[$name]));{
        
    }

    echo ['name'];
    
    ?>
</body>
</html>

<?php

$conn = mysqli_connect('localhost','root','','parking_db');
$sql =" select * from camera INNER JOIN parkingarea ON camera.parking_id = parkingarea_parking_id ";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result))

?>

<tr>
    <th>
        Name
    </th>
</tr>

<?php
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
    
    ?>
    <tr>
        <?php 
    </tr>
    }
}
?>


<?php

$conn = mysqli_connect('localhost','root','','parking_db');
$sql =" select * from camera INNER JOIN parkingarea ON camera.parking_id = parkingarea.parking_id ";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result))

?>

<tr>
    <th>
        Name
    </th>
</tr>

<?php
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
    
    ?>
    <tr>
        <td><?php echo $row["name"]; ?></td>
    </tr>
        <?php 

    }
}
?>

     <!-- camera -->

<body>
<?php include('header.php'); ?>
<?php include('db_conn.php'); ?>



    <div class="container mt-10">
<div class="box1">
<h2>CAMERAS</h2>
    <div><a href="admin.php" class ="btn btn-primary float-end"> Back</a>
    </div>
    <button class ="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> ADD CAMERA</button>
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

            $query = "select * from `camera`";
            
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
                <td><a href=".php?id=<?php echo $row['cam_id']; ?>" class="btn btn-primary">View</a></td>
                <td><a href="camera_update.php?id=<?php echo $row['cam_id']; ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['cam_id']; ?>" class="btn btn-danger">Delete</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">ADD CAMERA</h5>
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

<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>

<!-- admin camera -->
<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];



    $query = "select * from `parkingarea` where `parking_id` = '$id'";
    
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("query Failed".mysqli_error());
    }
    else{

        $row = mysqli_fetch_assoc($result);  
 }
}

?>



<div class="container mt-10">

<div class="form-group">
           
                <p class="form-control">
                <?php echo $row['description']  ?>
                </p>
            </div>
      


