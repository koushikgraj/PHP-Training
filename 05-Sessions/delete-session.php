<?php
session_start();
   unset($_SESSION['counter']);
   session_destroy();
?>