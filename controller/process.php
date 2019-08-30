<?php
require_once 'includes/Comment.php';

function pre_r($data)
{
    echo "<pre>";
    echo print_r($data);
    echo "</pre>";
}


$Comment = new Comment();
$comments = $Comment->fetch_all();
pre_r($comments);