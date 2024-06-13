<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Area</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<header>

<img src="images/logo.png" alt="Startup Company Logo">
        <h1>NMSC</h1>
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
<nav>
        <a href="login.php" class="tbtn">Admin</a>
        <a href="#About" class="tbtn">About Us</a>
    </nav>
</header>

    <div class="contain">
        <section class="hero">
        <img src="images/r.png" alt="Parking Area" class="Parking">
        <h2>VEHICLE PARKING SPACE MONITORING SYSTEM</h2>
            <p>Enables users to view the parking area in a distance and provides parking area informations in real-time</p>
            <a href="parkingArea.php" class="tbtn">Get Started</a>
        </section>

        <section class="features">
            <h2>Our Features</h2>
            <div>
                <h3>Feature 1</h3>
                <p>"  a  "</p>
            </div>
            <div>
                <h3>Feature 2</h3>
                <p>"  b  "</p>
            </div>
            <div>
                <h3>Feature 3</h3>
                <p>"  c  "</p>
            </div>
        </section>


        <section class="cta">
            <h2>Get Started Today!</h2>
            <a href="" class="tbtn">Contact Us</a>
        </section>
    </div>

    <?php include "footer.php"?>
    <script src="script.js"></script>
</body>
</html>
