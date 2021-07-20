<?php

include __DIR__.'/includes/headerindex.php';
include __DIR__.'/includes/telaprincipal.php';
include __DIR__.'/includes/footer.php';

echo "<link rel='stylesheet' type='text/css' href='css/style.css' />";

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login; //obriga usuário a estar logado;

Login::requireLogin();

?>

