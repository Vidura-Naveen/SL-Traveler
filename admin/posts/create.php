<?php include("../../path.php"); ?> 
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Admin Style-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Add Post</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>

            <div class="content">

                <h2 class="page-title">Add Post</h2>

                <?php include(ROOT_PATH . "/app/helpers/formError.php"); ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title;  ?>" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="editor"><?php echo $body; ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image"[] class="text-input">
                    </div>
                    <div>
                        <label>District</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            
                            <?php foreach($topics as $key => $topic): ?>
                            <?php if (!empty($topic_id) && $topic_id== $topic['id']): ?> 
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?> </option>
                                <?php else: ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?> </option>
                            <?php endif; ?>
                            
                           

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>

                        <?php if(empty($published)): ?>
                        <label>
                            <input type="checkbox" name="published" >
                            Publish 
                        </label>
                        <?php else: ?>
                        <label>
                            <input type="checkbox" name="published" checked >
                            Publish 
                        </label>
                        <?php endif ?>
                        
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Post</button>
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

