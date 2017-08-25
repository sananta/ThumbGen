<?php 
include 'image.inc.php';

header('Content-Type: image/png');

create_thumbnail('tall.png', false, 200, 200)
?>