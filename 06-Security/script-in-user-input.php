<?php

$user_input = "<script>location.replace('http://www.google.com');</script>";

echo "<h4>My Commenting System</h4>";

//echo $user_input;

//echo strip_tags($user_input);

echo filter_var($user_input, FILTER_SANITIZE_STRIPPED);
?>