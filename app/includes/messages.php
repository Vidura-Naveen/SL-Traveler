<?php if(isset($_SESSION['massage'])): ?>
        <div class="msg <?php echo $_SESSION['type']; ?>">

            <li><?php echo $_SESSION['massage']; ?></li>  

            <?php
                unset($_SESSION['massage']);
                unset($_SESSION['type']);

            ?>
            
        </div>
    <?php endif; ?>