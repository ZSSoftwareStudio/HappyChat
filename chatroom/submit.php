<?php
$room = $_POST['room'];		
echo "<script type='text/javascript'>";
echo "window.location = 'rooms.php?roomname={$room}';</script>";

?>