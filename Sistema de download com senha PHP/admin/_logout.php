<?php
include("restrito.php");
session_start();
session_destroy();
Header("Location:principal.php");
?>
