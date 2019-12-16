
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Happychat by Zarif</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/">
    <link rel="icon", href="my_image.jpg">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/menifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"> -->


    <style>

    .navbar{
      text-align: center;
    }
      .text{
        background: bisque;
        text-align: center;
      }
      .flex-shrink-0{
        background: bisque;
      }
      .container{
        text-align: center;
        color: black;
      }
      .clas{
        text-align: center;

      }
      .com{
        background: bisque;
        text-align: center;
        margin-top:30px;
        height: 400px;
        color: black;
      }
      input{
      text-align: center;
      border-radius: 40px;
      border: 5px solid lightblue;
      font-size:25px;
      width: 400px ;
      }
      .button{
        background: bisque;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="navabar.css" rel="stylesheet"> -->
  </head>
  <body class="d-flex flex-column h-100">

  <!-- Fixed navbar -->
<div class="pos-f-t" text-align: center ;>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-outline-primary" href="index.php">Home <span class="sr-only">(current)</span></a>
          <!-- <a class="btn btn-outline-success" href="sign.php">Sign in <span class="sr-only">(current)</span></a> -->
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
  </nav>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<div class="col-lg-6 offset-lg-2">
  <div class="container">
  <!-- <h1><img src="my_image.jpg" width="50" height="50" class="d-inline-block text-align-center" alt=""><b>Happychat</b></h1> -->
    <h1>Happychat</h1>
    <h2 class="mt-5"><i>Sign In</i></h2>
    <p class="lead"><i> <big>You have to sign up for your room</big></i></p>
  </div>
  <div class="com">
  <br>
      <form class="form-inline my-2 my-lg-0 mr-3" method="post" action="claim.php">
        <div class="input-group mb-3">
        <input class="form-control mr-sm-2" type="text" placeholder="Create Room" name="room">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit"><img src="create.png" alt="logo" width="30"></button>
        </div>
        </div>
      </form>
</div>
</div>
</main>

  <div class="text">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  Powered by :
  <!-- <img src="my_image.jpg" width="70" height="70" class="d-inline-block text-align-center" alt=""> -->
    <span class="text-muted"> <a href='http://localhost/chatroom/rooms.php?roomname=Zarif'><h3>Zarifsoftware</h3></a></span>
  </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
