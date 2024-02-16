<?php 
    $nonav='';
    // include '../../init.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usrname =$_POST['user'];
        $password =$_POST['pass'];
        // $usertype =$_POST['UserType'];
        $hashpass =sha1($password);
        // Check If THE User Exist  In DataBase
        $stmt = $con->prepare(" SELECT
                                    UserName , Password
                                FROM 
                                    users 
                                WHERE 
                                    UserName = ?
                                AND 
                                    Password = ?
                                AND 
                                    UserType = 1
                            ");
        $stmt->execute(array($usrname,$hashpass));
        $count = $stmt->rowCount();
        // IF COUNT > 0 THIS ORDER HAS DATA TO THE USER
        if ($count > 0 ) {
            $_SESSION['UserName']=$usrname;
            header('Location: dashboard.php');
            exit;
        }
        // elseif($count > 0){
        //     echo "welcome " . $usrname . " " . "You Are User";
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo $login_css?>">
</head>
<body>
<div class="div-form">
        <h1>Welcome back</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
            <div class="inp">
                <label for="user1">user</label>
                <input type="text" name="user" placeholder="Add Your Name" autocomplete="off">
            </div>
            <div class="inp">
                <label for="password1">password</label>
                <input type="password" name="pass" placeholder="Write Your password" autocomplete="new-password">
            </div>
            <div class="forget">
                <a href="">forget your password ? </a>
            </div>
            <input class="sub" type="submit" value="Login">
            <div class="line">
                <span>or</span>
            </div>
            <div class="more_log">
                <div class="box google">
                    <a href="#">
                        <i class="fa-brands fa-google"></i>
                        <p>google</p>
                    </a>
                </div>
                <div class="box facebook">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                        <p>facebook</p>
                    </a>
                </div>
                <div class="box twitter">
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                        <p>twitter</p>
                    </a>
                </div>
                <div class="box instagram">
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                        <p>instagram</p>
                    </a>
                </div>
            </div>
            <div class="sign_up">
                <a href="#">Don't have an Account ?</a>
            </div>
        </form>
    </div>
</body>
</html>