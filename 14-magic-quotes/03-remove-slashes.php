<?php
if (get_magic_quotes_gpc()) 
{
 function remove_slash(&$value)
 {
   $value = stripslashes($value);
 }
 array_walk_recursive($_GET, "remove_slash");
 array_walk_recursive($_POST, "remove_slash");
 array_walk_recursive($_COOKIE, "remove_slash");
 array_walk_recursive($_REQUEST, "remove_slash");
}
?>