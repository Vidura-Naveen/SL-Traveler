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
    <title>Admin Manage Post</title>
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

    <h2 class="page-title">Manage Posts</h2>

    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <table>

        <thead>
            <th>Number</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Actions</th>
        </thead>
        <tbody>

        <?php foreach ($posts as $key => $post): ?>
            <tr>
                <td><?php echo $key + 1;  ?></td>
                <td><?php echo $post['title']  ?></td>
                <td>Admin</td>
                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                <?php if($post['published']): ?>
                
                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">UnPublish</a></td>
                <?php else: ?>

                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Post</a></td>
                <?php endif; ?>


            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

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



