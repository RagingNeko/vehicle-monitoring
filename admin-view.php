    <?php include('header.php'); ?>
    <?php include('db_conn.php'); ?>

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

    <?php

    if(isset($_POST['view_parking'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }
        

        $name = $_POST['name'];
        $description = $_POST['description'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];

        $query = "view `parkingarea` set `name`='$name', `description`='$description', `barangay`='$barangay', `city`='$city' where `id` = '$idnew'";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query Failed".mysqli_error());
        }
    }

    ?> 

    <div class="container mt-10">

            <h2>Parking Area Details
            <a href="admin.php" class ="btn btn-primary float-end"> Back</a>
            </h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    
                    <p class="form-control">
                    <?php echo $row['name']?>
                </p>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                
                    <p class="form-control">
                    <?php echo $row['description'] ?>
                </p>
                </div>

                <div class="form-group">
                    <label for="barangay">Barangay</label>
                    
                    <p class="form-control">
                    <?php echo $row['barangay'] ?>
                </p>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    
                    <p class="form-control">
                    <?php echo $row['city'] ?>
                </p>
                </div>

                </div>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>