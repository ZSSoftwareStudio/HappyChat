
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
<link rel="manifest" href="menifest.json">
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
        margin-top:0px;
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
        background: lightblue;
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
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

  <!-- Fixed navbar -->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
    <div class="btn-group" role="group" aria-label="Basic example">
          <a class="btn btn-outline-primary" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="btn btn-outline-success" href="sign.php">Create <span class="sr-only">(current)</span></a>
          <a class="btn btn-outline-info" href="contact.php">Contact me <span class="sr-only">(current)</span></a>
          <a class="btn btn-outline-secondary" href="help.php">Help<span class="sr-only">(current)</span></a>

    </div>
    </div>
  </div>
<nav class="navbar navbar-dark bg-dark">
      

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"><img src="my_image.jpg" width="70" height="70" class="d-inline-block align-center" alt=""></span>  -->
    <img src="my_image.jpg" width="70" height="70" class="d-inline-block align-center" alt="">
    <a class="navbar-brand" > <b>Happychat</b></a>    

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
<br>
    <div class="com">
        <!-- <img src="my_image.jpg" alt="logo" width="120"> <h1>Welcome to Happychat</h1><br> -->
        <h1>Welcome to Happychat</h1><br>
        <h1 class="jumbotron-heading"><span id="typed"></span></h1>
        <p class="lead text-muted"><h4><i>Creator: ZarifSoftware</i></h4></p>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index.php" class="btn btn-outline-primary"> Home</a>
            <a href="sign.php" class="btn btn-outline-success">Create</a>
            <a href="contact.php" class="btn btn-outline-danger">Contact us</a>        
        </div>
    </div>
<br>
<br>
<br>
<div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5"><b>Happychat is free and open source</b></h2>
    </div>
      <p class="lead"><i>You can freely chat with your friends through Happychat. It is free and open source. On next version of it Zarifsoftware will more update it and will make it more powerful.There it will have a pro version.</i></p>
      <a href="sign.php" class="btn btn-outline-warning">Create</a>

      
    <!-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-6 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5"><b>Contact us.</b></h2>
      <p class="lead"><i>Contact us for any feedback.We will be happy to know about it. We will try to fix your feedback.For send feedback go to Contact me section.</i></p>
      <a href="contact.php" class="btn btn-outline-danger">Contact us</a>
      
    </div>
    <!-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
<div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5"><b>Don't Know How to use it?</b></h2>
    </div>
      <!-- <p class="lead"><i>You can freely chat with your friends through Happychat. It is free and open source. On next version of it Zarifsoftware will more update it and will make it more powerful.There it will have a pro version.</i></p> -->
      <a href="help.php" class="btn btn-outline-warning">Go to help me page.</a>

      
    <!-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
  </div>
  <br>

  <div class="text">
  Powered by :
  <!-- <img src="my_image.jpg" width="70" height="70" class="d-inline-block text-align-center" alt=""> -->
    <span class="text-muted"> <a href='http://localhost/chatroom/rooms.php?roomname=Zarif'><h3>Zarifsoftware</h3></a></span>
  </div>

</main>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
