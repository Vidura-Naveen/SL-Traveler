<?php include("../path.php"); ?> 
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 

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
    <!--Admin Style-->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Dashbord</title>
</head>
<body>
    

    <!--Admin Header Not working rooth path-->
    <?php include("../app/includes/adminHeader.php") ?>


    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">  

        <!--Left Sidebar Not working root path-->

        <?php include("../app/includes/adminSidebar.php") ?>

        <!--Left Sidebar//-->


                    <!--Admin content-->

                    <div class="admin-content">

          

            <div class="content">

                <h2 class="page-title">Dashbord</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


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
    <script src="../assets/js/scripts.js"></script> 
</body>
</html>

