<?php
$inBites = false;
$max_upload = (int)(ini_get('upload_max_filesize'));
$max_post = (int)(ini_get('post_max_size'));
$memory_limit = (int)(ini_get('memory_limit'));
$upload_mb = min($max_upload, $max_post, $memory_limit);
$resilt = ($inBites) ? $upload_mb * 1024 * 1024 : $upload_mb;
var_dump($resilt);