<?php

function validateTopic($topic)
{
    $errors=array();
    if(empty($topic['name']))
    {
        array_push($errors, 'Name Requried');
    }

    // $existingTopic= selectOne('topics', ['name' => $topic['name']]);
    // if ($existingTopic)
    // {
    //     array_push($errors, 'Name Allrady Exists');
    // }


    $existingTopic= selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic)
    {
        if(isset($post['update-topic']) && $existingTopic['id'] != $post['id'])
        {
            array_push($errors, 'Name Allraydy Exists');
        }
        if(isset($post['add-topic']))
        {
            array_push($errors, 'Name Allraydy Exists');
        }
    }

    return $errors;
}





?>