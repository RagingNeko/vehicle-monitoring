<html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Company Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<header>

<img src="images/logo.png" alt="Startup Company Logo">
<h1> <a href="index.php">NMSC</h1></a>
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
<nav>
        <a href="registration.php" class="tbtn">Admin</a>
        <a href="index.php" class="tbtn">Back</a>
    </nav>
</header>
    <?php include ('db_conn.php')?>
    <body>

    <?php


if(isset($_POST['add_parking'])){
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];

    if($name == "" || empty($name)){
        header('location:admin.php?message=you need to fill up!');
    }

    else{

        $query = "insert into `parking_area` (`name`, `description`, `barangay`, `city`) values ('$name', '$description', '$barangay', '$city')";

            $result = mysqli_query($conn,$query);

            if(!$result){
            die("Query Failed" .mysqli_error());
        }

        else{
            header('location:admin.php?insert_msg=added successfully');
        }
    }
}


if(isset($_GET['id'])){
    $id = $_GET['id'];


$query = "delete from `parkingarea` where `parking_id` = '$id'";

$result = mysqli_query($conn, $query);

if(!$result) {
die("Query Failed".mysqli_error());
}

else{
    header('location:admin.php? delete_msg= Deleted Successfully');
}
}

?>

<?php

if(isset($_GET['id'])){
$id = $_GET['id'];



$query = "select * from `parking_area` where `parking_id` = '$id'";

$result = mysqli_query($conn, $query);

if(!$result){
    die("query Failed".mysqli_error());
}
else{

    $row = mysqli_fetch_assoc($result);  
}
}
?>

<?php

if(isset($_POST['update_parking'])){

if(isset($_GET['id_new'])){
    $idnew = $_GET['id_new'];
}


$name = $_POST['name'];
$description = $_POST['description'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];

$query = "update `parking_area` set `name`='$name', `description`='$description', `barangay`='$barangay', `city`='$city' where `parking_id` = '$idnew'";
$result = mysqli_query($conn, $query);

if(!$result){
    die("query Failed".mysqli_error());
}
else{
    header('location:admin.php?update_msg=Succesfully updated the data');
}
}

?>


    <?php

    if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
    }
    
    ?>
  <div class="container mt-10">

<div class="container">

<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Brgy.</th>
        <th>City</th>
        <th>View</th>
    </tr>
    </thead>
    <tbody>

        <?php
        $query = "select * from `parking_area` ";
        
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query Failed".mysqli_error());
        } 
        else{
            while($row = mysqli_fetch_assoc($result)){
                ?>

        <tr>
            <td><?php echo $row['parking_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['barangay']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><a href="admin-camera.php?id=<?php echo $row['parking_id']; ?>" class="btn btn-primary">View</a></td>
        </tr>

                <?php
            }
        }
        ?>

    </tbody>

</table>
</div>
        <?php include 'footer.php';?>
    </body>
    </html>