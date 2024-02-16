<?php
include 'init.php';
include $lang_en;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php  echo $backend_css ;?>">
    <!-- <link rel="stylesheet" href="<?php echo $bootstrap_css ;?>" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo $fonts ;?>">
    <link rel="stylesheet" href="<?php echo $bootstrap_css2 ;?>">
    <!-- <link rel="stylesheet" href="<?php echo $bootstrap_css2 ;?>"> -->
<body>
    <!-- Start login -->
    <?php include $login; ?>
    <!-- End login -->
    <script src="<?php echo $jquery ;?>"></script>
    <!-- <script src="<?php echo $bootstrap_js ;?>" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script src="<?php echo $bootstrap_js1 ;?>"></script>
    <script src="<?php echo $backend_js ;?>"></script>
</body>
</html>