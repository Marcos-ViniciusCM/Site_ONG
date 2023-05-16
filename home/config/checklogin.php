<?php
session_start();
if(!(isset($_SESSION['username'])))//nao esquecr do ! depois do if
{
    header("Location: http://localhost/anjos/home");
}

?>
