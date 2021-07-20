<?php

$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>': '';

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

    <?=$alertaCadastro?>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="Name">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="E-mail">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Password">
      <div class="col-4 mx-auto p-2">
      <button type="submit" name="acao" class="btn btn-dark btn-md btn-block" value="cadastrar">Register</button>
      </div>
    </form>

    <!-- Remind Passowrd -->


  </div>

  <div class="col-4 p-0">
  <img src="img/bootstrap-stack.png" id="icon2" alt="User Icon" />
  </div>
</div>