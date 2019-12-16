<?php
$roomname = $_GET['roomname'];

include 'db_connect.php';	

$sql = "SELECT * FROM `rooms` WHERE `roomname` LIKE '$roomname'  ORDER BY `roomname` ASC";
$result = mysqli_query($conn, $sql);

if ($result == true) {
		if (mysqli_num_rows($result)==0) {
	$message = "This room does not exists.";
	echo "<script type='text/javascript'>alert('{$message}');";
	echo "window.location = 'http://localhost/chatroom';</script>";
  }
}
else{
	echo "Error: ". mysqli_error($conn);
}
?>

<!DOCTYPE html >
<html >
<head>
<title>Happychat by Zarif</title>
<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/">
<link rel="icon", href="my_image.jpg">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
input{
    text-align: center;
    border: 5px solid  bisque;
    font-size:20px;
    height: 40px;
    width: 460px;
}
.text{
  background: bisque;
  text-align: center;
}
.menu{
  text-align: center; 
  background: bisque;
}
.sign{
  border: 1px solid bisque;
  background-color: bisque;
  padding: 100px;
    /* display: inline-block; */
}
.container{
  text-align: center;
  margin-top:23px;
}
.time-right{
	float: right;
	color: #999;
}
.anyclass{
  background: bisque;
	height : 350px;
	overflow-y: scroll;
}
</style>
</head>
<body>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-outline-primary" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="btn btn-outline-success" href="sign.php">Create<span class="sr-only">(current)</span></a>
          <a class="btn btn-outline-info" href="contact.php">Contact me <span class="sr-only">(current)</span></a>
    </div>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <img src="my_image.jpg" width="70" height="70" class="d-inline-block align-center" alt="">     
    <a class="navbar-brand"> <b>Happychat</b></a>
    
    </button>
        <form class="form-inline my-2 my-lg-0 mr-3" method="post" action="submit.php">
        <div class="input-group mb-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Room" aria-label="Search" name="room">
        <div class="input-group-append">
           <button class="btn btn-outline-light" type="submit"><img src="search.png" alt="logo" width="30"></button>
        </div>
        </div>
        </form>
        </li>
      </ul>
      
    </div>
  </nav>
</header>
	<div class="anyclass">
	<div class="container">
    
	
	</div>
	<hr>

	</div>

<div class="sign">
<form class="form-inline my-2 my-lg-0 mr-3">
<input  name="usermsg" type="text" id="usermsg" size="40" placeholder="   Send Message" />
  <button class = "btn btn-outline-secondary" name="submitmsg" type="submit"  id="submitmsg" value="Send" > <img src="send.jpg" alt="logo" width="30"></button> 
</form>
        <br>
   <!-- <form action="" method="post">
  <button class = "btn btn-outline-danger" name="delete" type="submit" id="delete" ><img src="delete.jpg" alt="logo" width="40"></button> 
    </form>
  <script>
  $("#delete").click(function(){
    //<?php  
    //include "db_connect.php";
    //$sql="DELETE FROM `msgs` WHERE `room` = '$roomname'";
    //mysqli_query($conn, $sql);
    //?> 
   </script>  -->
</div>
<div class="text">
<br>
<br>
<br>
  Powered by :
  <!-- <img src="my_image.jpg" width="70" height="70" class="d-inline-block text-align-center" alt=""> -->
    <span class="text-muted"> <a href='http://localhost/chatroom/rooms.php?roomname=Zarif'><h3>Zarifsoftware</h3></a></span>
  </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
 
});
</script>



<script type="text/javascript">
setInterval(runFunction, 1000);
function runFunction()
{

  $.post("htcont.php", {room:'<?php echo $roomname?>'},
      function(data, status)
      {

        document.getElementsByClassName('anyclass')[0].innerHTML = data;
      });

}


$("#submitmsg").click(function(){
var clientmsg = $("#usermsg").val();

  $.post("postmsg.php", {text: clientmsg, room:'<?php echo $roomname?>', ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
  function (data, status) {
	  document.getElementsByClassName('anyclass')[0].innerHTML = data});
	return false;
});

</script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>