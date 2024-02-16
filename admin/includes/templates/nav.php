<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo $nav_css ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php  echo $backend_css ;?>">
    <!-- <link rel="stylesheet" href="<?php echo $bootstrap_css ;?>" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo $fonts ;?>">
    <link rel="stylesheet" href="<?php echo $bootstrap_css2 ;?>">
    <!-- <link rel="stylesheet" href="<?php echo $bootstrap_css2 ;?>"> -->
<body>
<nav class="navbar">
      <div class="logo">
        <img src="<?php echo $a ?>" />
        <h2>Home</h2>
      </div>
      <div class="links">
        <a href="#" >Categories</a>
        <div class="dropdown nav navbar-nav navbar-right">
          <a href="#" 
            >Explore
            <img src="<?php echo $b ?>" />
          </a>
          <div class="menu">
            <a href="#"> Edit Profile </a>
            <a href="#"> Setting </a>
            <a href="#"> Log Out </a>
          </div>
        </div>
      </div>
    </nav>
    <script src="<?php echo $jquery ;?>"></script>
    <!-- <script src="<?php echo $bootstrap_js ;?>" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script src="<?php echo $bootstrap_js1 ;?>"></script>
    <script src="<?php echo $backend_js ;?>"></script>
</body>
</html>