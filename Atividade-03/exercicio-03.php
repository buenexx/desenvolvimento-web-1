<?php

require 'exercicio-02.php';

$result = isVoter((int)$_POST['age'], $_POST['name']);

session_start();

$_SESSION['isVoter'] = $result;

echo ' <script> window.location.href = "exercicio-04.php" </script>';
