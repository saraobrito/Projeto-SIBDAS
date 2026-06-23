<?php
// public/logout.php
session_start();
session_destroy();
header('Location: /Projeto SIBDAS/public/login.php');
exit();