<?php if(count($errors) > 0):  ?>
    <div class="msg sucess error">
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>