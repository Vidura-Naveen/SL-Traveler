<?php 
include('path.php');
include(ROOT_PATH . "/app/controllers/topics.php");
// include("app/database/db.php");


$posts = array();
$postTitle = 'Recent Posts';

if(isset($_GET['t_id']))
{
    $posts = getPostsByTopicId($_GET['t_id']);
    $postTitle = "Your Search Result Of :  '" . $_GET['name'] . "'";
}

else if(isset($_POST['search-term']))
{
    $postTitle = "You Search :-  '" . $_POST['search-term'] . "'";
    $posts=serchPosts($_POST['search-term']);
}   
else
{
$posts = getPublishedPosts();
}

 
?>



    <!-- Font avasome-->
    <script src="https://kit.fontawesome.com/7bbc05e69c.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!--Costum Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    
  
    

    <!--Header-->
    
    <?php include(ROOT_PATH ."/app/includes/messages.php");  ?>


    

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post slider-->
        <div class="post-slider">
            <h1 class="slider-title" style="color:White">SriLankan Places</h1>

            <i class="fa fa-chevron-left prev"></i>

            <i class="fa fa-chevron-right next"></i>

            <div class="post-wrapper">
                

                <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];  ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        <i class="far fa-user"><?php echo $post['username']; ?></i> 
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y',strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach; ?>
                
                
            </div>

        </div>

        <!--Post slider-->

        <!--content-->
        <div class="content clearfix">

            <!--Main Content-->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postTitle; ?></h1>


                


                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];  ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                        <i class="far fa-user"><?php echo $post['username']; ?> </i>
                        &nbsp;
                        <i class="far calendar"><?php echo date('F j, Y',strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0 , 50 ) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>

                    </div>
                </div>
                <?php endforeach; ?>


            </div>
            <!--Main Content//-->

                <div class="sidebar">

                    <div class="section search">
                        <h2 class="section-title">Search</h2>
                        <form action="blogpage.php" method="post">  
                            <input type="text" name="search-term" class="text-input" placeholder="Search...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h2 class="section-title">District</h2>
                        <ul>
                          

                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/blogpage.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>     
                        <?php endforeach; ?>

                        </ul>
                    </div>

                </div>

        </div>
        <!--content//-->
    </div>
    

    <!--Page Wrapper//-->



    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--slick-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom Scrypt-->

    <script src="assets/js/scripts.js"></script> 
