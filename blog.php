
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

     <!--Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet"> 

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <?php require_once 'head.php';?>

    <!-- Navigation -->
    <?php require_once 'nav.php';?>

<div class="container"> 

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Enjoy
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>

    </div>
    <?php include ("blogpage.php"); ?>
   
    <?php require_once 'foot.php';?>



</body>

</html>
