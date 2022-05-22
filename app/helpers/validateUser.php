<?php

function validateUser($user)
{
    $errors=array();
    if(empty($user['username']))
    {
        array_push($errors, 'Username Requried');
    }

    if(empty($user['email']))
    {
        array_push($errors, 'Email Requried');
    }

    if(empty($user['password']))
    {
        array_push($errors, 'Password Requried');
    }


    if($user['passwordConfirm'] !== $user['password'])
    {
        array_push($errors, 'Password Not Match');
    }

    // $existingUser= selectOne('users', ['email' => $user['email']]);
    // if ($existingUser)
    // {
    //     array_push($errors, 'Email Allrady Exists');
    // }

    $existingUser= selectOne('users', ['email' => $user['email']]);
    if ($existingUser)
    {
        if(isset($user['update-user']) && $existingUser['id'] != $user['id'])
        {
            array_push($errors, 'Email Allrady Exists');
        }
        if(isset($user['create-admin']))
        {
            array_push($errors, 'Email Allrady Exists');
        }
    }

    return $errors;
}




function validateLogin($user)
{
    $errors=array();
    if(empty($user['username']))
    {
        array_push($errors, 'Username Requried');
    }


    if(empty($user['password']))
    {
        array_push($errors, 'Password Requried');
    }

    
    return $errors;
}
?>