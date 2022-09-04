<?php

// $userName = md5($_GET['u']);

//then javascript to validate the input and button 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Reedem</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">


    <form class="form-signin">
      <img class="mb-4" src="checkers.jpg" alt="" width="72" height="72">
      <div class="starter-template">
   
    <p class="lead">What do you want to redeem?</p>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Add 20 points to my Checkers Xtra Savings Card
  </label>
</div>

<br>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
    50% off any Bokomo products
  </label>
</div>

     <br>

     <a class="btn btn-outline-primary" id="continue">Continue</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>


    <script>

       document.getElementById('continue').onclick = function() {
         alert("Successfully redeemed! ");
         window.location.href = "index.php";
}  


 
    </script>



  </body>
</html>
