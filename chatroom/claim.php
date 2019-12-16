<?php
$room = $_POST['room'];

if(strlen($room)>25 or strlen($room)<3)
{
	$message = "Please choose a name between 3 to 25 characters";
	echo "<script type='text/javascript'>alert('{$message}');";
	echo "window.location = 'sign.php';</script>";
}
elseif (!ctype_alnum($room)) {
	$message = "Please choose another good name between 2 to 20 characters";
	echo "<script type='text/javascript'>alert('{$message}');";
	echo "window.location = 'sign.php';</script>";
	}

else{
include 'db_connect.php';

	
 $sql = "SELECT * FROM `rooms` WHERE `roomname` LIKE '$room'  ORDER BY `roomname` ASC";
 $result = mysqli_query($conn, $sql);
 if ($result == true) {
 		if (mysqli_num_rows($result)>0) {
	$message = "Please choose a diferent room name .";
	echo "<script type='text/javascript'>alert('{$message}');";
	echo "window.location = 'sign.php';</script>";
	}
	else{
		$sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ( '$room', current_timestamp())";
		if(mysqli_query($conn, $sql))
		{
			// $message = "The room is Started";
			echo "<script type='text/javascript'>";
			echo "window.location = 'rooms.php?roomname={$room}';</script>";
		}
	}
}	
else{
	echo "Error: ". mysqli_error($conn);
}

}
?>