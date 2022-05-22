<?php

function validatePost($post)
{
    $errors=array();
    if(empty($post['title']))
    {
        array_push($errors, 'Title Requried');
    }

    if(empty($post['body']))
    {
        array_push($errors, 'Body Requried');
    }

    if(empty($post['topic_id']))
    {
        array_push($errors, 'plese select a topic');
    }

    $existingPost= selectOne('posts', ['title' => $post['title']]);
    if ($existingPost)
    {
        if(isset($post['update-post']) && $existingPost['id'] != $post['id'])
        {
            array_push($errors, 'Post Allrady Exists');
        }
        if(isset($post['add-post']))
        {
            array_push($errors, 'Post Allrady Exists');
        }
    }

    return $errors;
}




?>