<?php
require ("../../../classes/Comment.php");

$comment = new Comment();

echo $comment->getAllComment(1);