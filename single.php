<?php include('path.php');  ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');


if(isset($_GET['id']))
{
$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');

$posts = selectAll('posts', ['published' => 1]);

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
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $post['title'] ; ?> | SL Traveller</title>
</head>
<body>
<!--Fb Page Plugin-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0" nonce="Jyho7nHa"></script>

    <!--Header-->
    <?php include(ROOT_PATH ."/app/includes/header.php")  ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">
        
        <!--content-->
        <div class="content clearfix">

            <!--Main Content-->
            <div class="main-content-wrapper">
                <div class="main-content single">

                <h1 class="post-title"><?php echo $post['title'] ; ?></h1>

                <div class="post-content">
                <?php echo html_entity_decode($post['body']); ?>
                        
                </div>
                

                </div>
            </div>
            <!--Main Content//-->


            <!--Side Bar-->
                <div class="sidebar single">

                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

                    <div class="section populer">

                        <h2 class="section-title">Most Recent</h2>

                        <?php foreach($posts as $p): ?>

                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title"><h4><?php echo  $p['title']; ?></h4></a>
                        </div>
                        <?php endforeach; ?>
                     
                  </div>
               
                
                        <div class="section topics">
                            <h2 class="section-title">District</h2>
                            <ul>
                                <?php foreach($topics as $topic): ?>
                                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                                <?php endforeach; ?>
                        
                            </ul>
            
                        </div>  
                 </div>  
         
                

            <!--side bar//-->

        </div>
        <!--content//-->
    </div>
    

    <!--Page Wrapper//-->

    <!--Footer-->

    <?php include(ROOT_PATH ."/app/includes/footer.php");  ?>
    
     <!--Footer//-->


    <!--jQuery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--slick-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom Scrypt-->

    <script src="assets/js/scripts.js"></script> 
</body>
</html>