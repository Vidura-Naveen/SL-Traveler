<header>
        <a href="<?php echo BASE_URL . '/blog.php' ?>" class="logo">
            <h1 class="logoText">
                SL <span> Traveller </span>
            </h1> 
        </a>
        <i class="fa fa-bars menu-toggle"></i> 
            <ul class="nav"> 
            


            <?php if (isset($_SESSION['id'])): ?>

                <li>
                    <a href="#" >
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down " style="font-size: .8em;"></i>
                    </a>
                <ul>


                    <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/index.php' ?>" >Dashbord</a></li>
                    <?php endif; ?> 

                    <li><a href="<?php echo BASE_URL . '/admin/logout.php' ?>" class="logout" >Logout</a></li>
                </ul>
            </li>
            <?php else: ?>
            <li><a href="<?php echo BASE_URL . '/admin/register.php' ?>" >Sign up</a></li>
            <li><a href="<?php echo BASE_URL . '/admin/index.php' ?>" >Log In</a></li>   
            
            <?php endif; ?>
           
            </ul>

       
    </header>