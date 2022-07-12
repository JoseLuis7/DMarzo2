<?php
session_start();
session_destroy();

header("Location: INICIO.php");
?>