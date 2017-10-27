<?php
$msg = htmlentities($_POST['msg']) ?: 'no post.';
header('Content-Type: application/json');
echo json_encode(array('msg' => $msg));
exit;
