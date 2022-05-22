<?php

include(ROOT_PATH . "/app/database/db.php");

include(ROOT_PATH . "/app/helpers/validateTopic.php");


$table = 'topics';
$errors=array();
$id ='';
$name ='';
$description ='';

$topics = selectAll($table);




if(isset($_POST['add-topics'])) 
{
    
    $errors = validateTopic($_POST);

    if(count($errors)===0)
    {
        unset($_POST['add-topics']);
        $topic_id = create('topics', $_POST);
        $_SESSION['massage'] = 'Topic Create Sucessfully';
        $_SESSION['type'] = 'sucess';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    }
    else
    {
        $name = $_POST['name'];
        $description =$_POST['description'];
    }

}

if (isset($_GET['id']))
{
    $id= $_GET['id'];
    $topic = selectOne($table,['id' => $id]);
    $id= $topic['id'];  
    $name = $topic['name'];
    $description = $topic['description'];
}


if (isset($_GET['del_id'])) 
{
    
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['massage'] = 'Topic Delete Sucessfully';
    $_SESSION['type'] = 'sucess';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}



if (isset($_POST['update-topic']))
{   
    
    $errors = validateTopic($_POST);

    if(count($errors)===0){
        $id=$_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id , $_POST);
        $_SESSION['massage'] = 'Topic update Sucessfully';
        $_SESSION['type'] = 'sucess';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description =$_POST['description'];
    }


}


?>