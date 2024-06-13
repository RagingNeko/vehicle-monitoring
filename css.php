*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Work Sans', sans-serif;
    text-decoration: none;
    list-style: none;
}
body{
    background: #011627;
    color: #fff;
}
nav{
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px 15%;
    background:transparent ;
    transition: all .50s ease;
}
.logo{
    color:#fff;
    font-size: 35px;
    font-weight: 700;
    cursor: pointer;
}
.navlist{
    display: flex;
}
.navlist a{
    margin: 0px 5px;
    padding: 5px 10px;
    color: #d6d6d6;
    font-size: 17px;
    font-weight: 500;
    transition: all .50s ease;
}
.navlist a:hover{
    color: #fff;
}
.btn{
    display: inline-block;
    padding: 12px 30px;
    color: #fff;
    background: #00c9e0;
    border-radius: 30px;
    font-size: 15px;
    border: 2px solid transparent;
    transition: all .40s ease;
}
.btn:hover{
    border: 2px solid #00c9e0;
    color:#00c9e0;
    background: transparent;
}
#menu-icon{
    color: #fff;
    font-size: 38px;
    z-index: 10001;
    cursor: pointer;
    display: none;
}

section{
    padding: 0 15%;
}
.hero{
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(to right, rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url(../images/background.jpg);
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.main-text h1{
    font-size: 90px;
    font-weight: 800;
    mask-border: 5px;   
}
.main-text p{
    font-size: 30px;
    font-weight: 600;
}
@media (max-width: 1350px){
    nav{
        padding: 20px 5%;
    }
    section{
        padding: 0px 5%;
    }
}
@media (max-width: 950px){
    .main-text h1{
        font-size: 70px;
    }
    .main-text h1{
        font-size: 22px;
    }
.logo{
    font-size: 30px;
}
.btn{
    padding: 9px 27px;
    }
}

@media (max-width: 860px){
    #menu-icon{
        display: block;
    }
    .navlist{
        position: absolute;
        top: -800%;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        background: #00c9e0;
        transition: all .50s ease;
        text-align: left;
    }
    .navlist a{
        color: #fff;
        padding: 1rem;
        border-left: 2px solid #fff;
        margin: 1rem;
        display: block;
    }
    .navlist a:hover{
        background:#fff ;
        color: #00c9e0;
    }
    .navlist.open{
        top:100%;
    }
}

@media (max-width: 750px){
    .main-text h1{
        font-size: 50px;
    }
}



background
body{
    background: #011627;
    color: #fff;
}

background-image: linear-gradient(to right, rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url:();

background: rgb(45, 181, 199);

background-image: linear-gradient(to right top, #5c066f, #5c0f7e, #59188d, #53219d, #482aad, #3d45c5, #2b5edb, #0075f0, #009eff, #00c0ff, #00dffc, #5ffbf1);






#main_title{
        text-align: center;
        background-color: #333 ;
        color:#fff ;
        padding: 20px;
        letter-spacing: 2px;
        font-weight: 500;
    }



<!-- css -->


*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Work Sans', sans-serif;
        text-decoration: none;
        list-style: none;
    }
    a{
        color: #333;
    }

    nav{
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 15%;
        background-color:#000000;
        transition: all .50s ease;
    }

    .name{
        color:#fff;
        width: 100%;
        top: 0;
        left: 0;  
        display: block;
        padding: 1px 5%;
        font-size: 2.5rem;
        background:transparent ;
        font-weight: bold;
        transition: all .50s ease;
    }
    .logo{
        float: left;
        width: 25px;
    }
    .logo #logo{
        width: 70px;
        height: 70px;
        }
    .Nmsc{
        position: absolute;
        display: flex;
        flex-direction: column;
        transition: all .50s ease;
        text-align: right;
        color: #fff;
        padding: 1rem;
        margin: 4rem;
        display: block;
        font-family: Arial black, Helvetica, sans-serif;    
        }    
    .navlist{
        display: flex;
    }
    .navlist a{
        margin: 10px 5px;
        padding: 5px 10px;
        color: #d6d6d6;
        font-size: 17px;
        font-weight: 500;
        transition: all .50s ease;
        text-decoration: none;
    }
    .navlist a:hover{
        color: #fff;
    }
    .tbtn{
        display: inline-block;
        padding: 12px 30px;
        color: #fff;
        background:#FF8C00 ;
        border-radius: 30px;
        font-size: 15px;
        border: 2px solid transparent;
        transition: all .40s ease;
    }
    .tbtn:hover{
        border: 2px solid #FFA500;
        color:#FFA500;
        background: transparent;
    }
    #menu-icon{
        color: #fff;
        font-size: 38px;
        z-index: 10001;
        cursor: pointer;
        display: none;
    }

    section{
        padding: 0 15%;
    }

    body{
        background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
        background-image:url(../images/background.jpg);
        background-size: cover;
        background-position: center;
        
    }

    .Title_image{
        transition: all .50s ease;
        display: flex;
        align-items: center;
        justify-content: center;
       
    }

    .Title_name{
        transition: all .50s ease;
        width: 100%;
        display: flex;
        align-items: center;
        align-content: left;
        text-align: center;
    }

    h3{
        transition: all .50s ease;
        height: 600px;
        width: 100%;
        text-indent: 50px;
        text-align: justify;
        align-items: center;
        justify-content: right;
        text-align: left;
        
    }

    .car #car{
        transition: all .50s ease;
        position: center;
        display: flex;
        width: 100%;
        height: 100%;
        color: white;
        }
    .main-text p{
        font-size: 30px;
        font-weight: 600;
    }
    @media (max-width: 1350px){
        nav{
            padding: 20px 5%;
        }
        section{
            padding: 0px 5%;
        }
    }
    @media (max-width: 950px){
        .main-text h1{
            font-size: 70px;
        }
        .main-text h1{
            font-size: 22px;
        }
    .logo{
        font-size: 30px;
    }
    .btn{
        padding: 9px 27px;
        }
    }

    @media (max-width: 860px){
        #menu-icon{
            display: block;
        }
        .navlist{
            position: absolute;
            top: -800%;
            left: 0;
            right: 0;
            display: flex;
            flex-direction: column;
            background: #00c9e0;
            transition: all .50s ease;
            text-align: left;
        }
        .navlist a{
            color: #fff;
            padding: 1rem;
            border-left: 2px solid #fff;
            margin: 1rem;
            display: block;
        }
        .navlist a:hover{
            background:#fff ;
            color: #00c9e0;
        }
        .navlist.open{
            top:100%;
        }
    }

    @media (max-width: 750px){
        .main-text h1{
            font-size: 50px;
        }
    }

    .titleName {
        color: black;
    }
    

    body{
        padding:200px;
    }
    .sudlanan{
        background-color: #0075f0;
        max-width: 600px;
        margin:0 auto;
        padding:50px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
        body{
            padding:150px;
    }
    .form-group{
        margin-bottom:30px;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root{
        --green:#27ae60;
        --black:#333;
        --white:#fff;
        --bg-color:#eee;
        --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        --border:.1rem solid var(--black);
    }

    *{
        font-family: 'Poppins', sans-serif;
        margin: 0; padding: 0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
    }

    html{
        font: 62.5%;
        overflow-x: hidden;
    }

    .box1 h2{
        float: left;
    }

    .box1 button{
        float: right;
    }
    .container{
        margin-top: 50px;

    h6{
        text-align: center;
        color: red;
    }
    }
    .button{
        display: block;
        width: 100%;
        cursor: pointer;
        border-radius: .5rem;
        margin-top: 1rem;
        font-size: 1.7rem;
        padding: 1rem 3rem;
        background: var(--green);
        color: var(--white);
        text-align: center;
    }

    .button:hover{
        background: var(--black);
    }

    .message{
        display: block;
        background: none;
        padding: 1.5rem 1rem;
        font-size: 2rem;
        color: var(--black);
        margin-bottom: 2rem;
        text-align: center;
    }



    .admin-parking-form-container .centered{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .admin-parking-form-container form{
        max-width: 50rem;
        margin: 0 auto;
        padding:2rem;
        border-radius: .5rem;
        background: var(--bg-color);
    }

    .admin-parking-form-container form h3{
        text-transform: uppercase;
        color: var(--black);
        margin-bottom: 1rem;
        text-align: center;
        font-size: 2.5rem;
    }

    .admin-parking-form-container form .box{
        width: 100%;
        border-radius: .5rem;
        padding: 1.2rem 1.5rem;
        font-size: 1.7rem;
        margin: 1rem 0;
        background: var(--white);
        text-transform: none;
    }

    .parking-display{
        margin: 2rem 0;
    }

    .parking-display .parking-display-table{
        width: 100%;
        text-align: center;
    }

    .parking-display .parking-display-table thead{
        background: var(--bg-color);
    }

    .parking-display .parking-display-table th{
        padding: 1rem;
        font-size: 2rem;
    }

    .parking-display .parking-display-table td{
        padding: 1rem;
        font-size: 2rem;
        border-bottom: var(--border);
    }

    .parking-display .parkingt-display-table .btn:first-child{
        margin-top: 0;
    }

    .parking-display .parking-display-table .btn:last-child{
        background: crimson;
    }

    .parking-display .parking-display-table .btn:first-child:hover{
        background-color: var(--black);
    }

    .butn{
        display: inline-block;
        padding: 12px 30px;
        color: #fff;
        background: #00FA9A;
        border-radius: 30px;
        font-size: 15px;
        border: 2px solid transparent;
        transition: all .40s ease;
    }


    @media (max-width:991px){
        html{
            font-size: 55%;
        }


    }

    @media (max-width:768px){

        .parking-display{
            overflow-y: scroll;
        }

        .parking-display .parking-display-table{
            width: 80rem;
        }

    }

    @media (max-width:450px){
        html{
            font-size: 50%;
        }
    } 
    
<!-- index -->

<html>
  <?php include 'header.php'?>
  </head>
<style>
  body{
    background-image:url(images/1.jpg);
  }
</style>

    <body>

      <div class="Title_image">
      <div class="car">
      <img id="car" src="images/r.png">   
      </div>
  
  <div class="Title_name">
  <h1>VEHICLE PARKING SPACE MONITORING SYSTEM</h1>
  <h3>Enables users to view the parking area in a distance and provides parking area informations in real-time</h3>
  </div>

  </div>

  <?php include 'footer.php'?>
    <sript src="js/script.js"></script>
    </body>
  </html>


  <!-- header -->

  <!DOCTYPE html>
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
    <nav>   
    
      <div class="logo" href="index.php">
      <img id="logo" src="images/logo.png">
      
      </div>
      <div class="bx bx-menu" id="menu-icon"></div>
      
      <div class="Nmsc">NORTHWESTERN MINDANAO STATE COLLEGE OF SCIENCE AND TECHNOLOGY</div>
      <ul class="navlist">
          <a href="parkingArea.php" class="tbtn">Parking Area</a>
          <a href="registration.php" class="tbtn">Admin</a>
      </ul>      
    </nav>
    

    </body>
  </html>




  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Work Sans', sans-serif;
    text-decoration: none;
    list-style: none;
}

a{
    color: #333;
}

nav{
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 15%;
    background-color:#000000;
    transition: all .50s ease;
}

.logo{
    float: left;
    width: 70px;
    transition: all .50s ease;
}

.logo #logo{
    width: 100%;
    height: 100%;
    }

    @media (max-width: 1231px){
    .Nmsc{
        font-size: 1.5rem;
        font-family: Arial black, Helvetica, sans-serif;    
        }

    .header__tbtn{
        font-size: 0.8rem;
    }
    }

    .Nmsc{
        position: absolute;
        color: #fff;
        padding: 1rem;
        margin: 4rem;
        display: block;
        font-family: Arial black, Helvetica, sans-serif;    
        } 



        .navlist{
            display: flex;
        }

        .navlist a{
            margin: 10px 5px;
            padding: 5px 10px;
            color: #d6d6d6;
            font-size: 17px;
            font-weight: 50px;
            transition: all .50s ease;
            text-decoration: none;
        }





        display: inline;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 15%;
    background-color:#000000;
    transition: all .50s ease;
    float: right;
    