    <?php
    include 'db_conn.php';
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

    ?>