<?php 
session_start();

session_unset();
session_destroy();

header("Location: cr-or-lg.php");