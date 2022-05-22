<?php include('../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/user.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font avasome-->
    <script src="https://kit.fontawesome.com/7bbc05e69c.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!--Costum Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>

   <!--Header-->
    <?php include(ROOT_PATH ."/app/includes/header.php")  ?>



    <div class="auth-content">

        <form action="../admin/dashbord.php" method="POST">

            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH ."/app/helpers/formError.php")  ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
        
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>"  class="text-input">
            </div>
           
           <div>
               <button type="submit" name="login-btn" class="btn btn-big">Login</button>
           </div>
           <p>Or <a href="<?php echo BASE_URL, 'admin/register.php' ?>">Sign Up</a></p>
        </form>

    </div>
    

   

    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <!--Custom Scrypt-->

    <script src="assets/js/scripts.js"></script> 
</body>
</html> 