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
   
    <p class="lead">Hi there thank you for your engagement! Insert your redeemable code here:</p>
  </div>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Code"  value="3455"required autofocus>
      
     <br>

     <a class="btn btn-outline-primary" href="step2.php">Redeem</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>

    <script>
    alert('whoah! whats that? you seem to have received an sms from checkers! you read a brief promo special they got going on...you copy the *3455* redeemable code and click the url link inside the sms.....and so, here you are!');
    
    </script>

  </body>
</html>
