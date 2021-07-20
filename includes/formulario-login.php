<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>': '';

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/stylelogin.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/bootstrap.png" id="icon" alt="User Icon" />
    </div>

    <?=$alertaLogin?>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="E-mail">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Password">
      <div class="col-4 mx-auto p-2">
      <button type="submit" name="acao" class="btn btn-dark btn-md btn-block" value="logar">Log In</button>
      </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover px-4" href="#">Forgot Password?</a>
      <a class="underlineHover px-4" href="registerpage.php">Create Account</a>
    </div>

  </div>

  <div class="col-4 p-0">
  <img src="img/bootstrap-stack.png" id="icon2" alt="User Icon" />
  </div>
</div>