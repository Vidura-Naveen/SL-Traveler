<?php

include(ROOT_PATH . "/app/database/db.php");

include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'users';   

$admin_users = selectAll($table);

$errors= array();
$id= '';
$username= '';
$admin= '';
$email= '';
$password= '';
$passwordConfirm= '';


function loginUser($user)
{
      //log user in
      $_SESSION['id'] = $user['id']; 
      $_SESSION['username'] = $user['username']; 
      $_SESSION['admin'] = $user['admin']; 
      $_SESSION['massage'] = 'You are Now log In';  
      $_SESSION['type'] = 'sucess'; 


      if($_SESSION['admin']){
          header('location: ' .BASE_URL  . '/admin/dashbord.php');
      }
      else{
          header('location: ' .BASE_URL  . '/admin/index.php');
      }
      exit();

}



if(isset($_POST['register-btn']) || isset($_POST['create-admin']))
{
    $errors = validateUser($_POST);
    if(count($errors)===0)
    {
        unset($_POST['register-btn'], $_POST['passwordConfirm'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if(isset($_POST['admin']))
        {
            $_POST['admin']=1;
            $user_id = create($table , $_POST);
            $_SESSION['message'] = 'Admin User Created Sucessfully';
            $_SESSION['type'] = 'sucess';
            header('location: ' .BASE_URL  . 'admin/users/index.php');
            exit();
        }
        else
        {
            $_POST['admin']=0;
            $user_id = create($table , $_POST);
            $user = selectOne($table , ['id' => $user_id]);
            loginUser($user);
        }
    }
    else
    {
        $username= $_POST['username'];
        $admin= isset($_POST['admin']) ? 1 : 0;
        $email= $_POST['email'];
        $password= $_POST['password'];
        $passwordConfirm= $_POST['passwordConfirm'];
    }
}


if(isset($_POST['update-user']))
{
   
    $errors = validateUser($_POST);
    if(count($errors)===0)
    {
        $id= $_POST['id'];
        unset($_POST['passwordConfirm'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
     
        
            $_POST['admin']=isset($_POST['admin']) ? 1 : 0;
            $count= update($table ,$id , $_POST);
            $_SESSION['message'] = 'Admin User Created Sucessfully';
            $_SESSION['type'] = 'sucess';
            header('location: ' .BASE_URL  . 'admin/users/index.php');
            exit();
        
    }
    else
    {
        $username= $_POST['username'];
        $admin= isset($_POST['admin']) ? 1 : 0;
        $email= $_POST['email'];
        $password= $_POST['password'];
        $passwordConfirm= $_POST['passwordConfirm'];
    }
}



if(isset($_GET['id']))
{
    $user = selectOne($table, ['id' => $_GET['id']]); 
    $id= $user['id'];
    $username= $user['username'];
    $admin= $user['admin'] == 1 ? 1 : 0;
    $email= $user['email'];
}




if(isset($_POST['login-btn']))
{
    $errors= validateLogin($_POST);

    if(count($errors)===0)
    {
        $user = selectOne($table , ['username'=> $_POST['username']]);

        if($user && password_verify($_POST['password'] , $user['password']))
        {

            //log user in
            loginUser($user);

        }
        else
        {
            array_push($errors, 'User Name OR Password Incorrect');
        }   

        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}


if (isset($_GET['delete_id'])) {
   
    $count = delete($table , $_GET['delete_id']);
    $_SESSION['message'] = 'Admin User Deleted';
    $_SESSION['type'] = 'sucess';
    header('location: ' .BASE_URL  . 'admin/users/index.php');
    exit();
} 




?>