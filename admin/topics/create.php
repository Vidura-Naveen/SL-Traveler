<?php include("../../path.php"); ?> 
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 

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
    <title>Admin Add Catagory</title>
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
                    <a href="create.php" class="btn btn-big">Add Catogary</a>
                    <a href="index.php" class="btn btn-big">Manage Catogary</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Add Catogary</h2>
                    <?php include(ROOT_PATH ."/app/helpers/formError.php")  ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                        </div>
                        <div>
                            <label>District</label>
                            <textarea name="description" id="editor"><?php echo $description ?></textarea>
                        </div>
                        <div>
                            <button type="submit" name="add-topics" class="btn btn-big">Add District</button>
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