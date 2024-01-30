<?php

session_start();
require 'constants.php';

if(isset($_SESSION['user'])) {
  unset($_SESSION['user']);
  session_destroy();
  header('Location: login.php');
}else {
  header('Location: '.BASE_URL);
}
