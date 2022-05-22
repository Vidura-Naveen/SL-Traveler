<?php include("../../path.php"); ?> 
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Admin Style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Edit User</title>
</head>
<body>
    

    <!--Admin Header Not working rooth path-->
    <?php include("../../app/includes/adminHeader.php") ?>


    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">  

        <!--Left Sidebar Not working root path-->

        <?php include("../../app/includes/adminSidebar.php") ?>

        <!--Left Sidebar//-->

<!--Admin content-->

<div class="admin-content">

    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add User</a>
        <a href="index.php" class="btn btn-big">Manage User</a>
    </div>

    <div class="content">

        <h2 class="page-title">Edit User</h2>

        <?php include(ROOT_PATH . "/app/helpers/formError.php"); ?>

        <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <label>Password Confirm</label>
                <input type="password" name="passwordConfirm" value="<?php echo $passwordConfirm; ?>" class="text-input">
            </div>
            <div>

                <?php if (isset($admin) && $admin == 1): ?>
                    <label>
                    <input type="checkbox" name="admin" checked>    
                    Admin   
                    </label>
                <?php else: ?>
                    <label>
                    <input type="checkbox" name="admin" >    
                    Admin   
                    </label>
                <?php endif; ?>
            </div>
            <div>
                <button type="submit" name="update-user" class="btn btn-big">Update User</button>
            </div>
        </form>

    </div>

</div>

<!--Admin content//-->



    </div>
    <!--Page Wrapper//-->


    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <!--Custom Scrypt-->
    <script src="../../assets/js/scripts.js"></script> 
</body>
</html>
        