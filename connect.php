<?php
// connexion à la base de donné

$mysqli = new mysqli("localhost","root","","memory",3307);

if ($mysqli) {
    echo "connexion établie <br />";
  }
  else { 
    die(mysqli_connect_error());
  }
?>