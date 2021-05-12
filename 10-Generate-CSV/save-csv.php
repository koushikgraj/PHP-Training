<?php
$list = array (
  array("Sachin", "Rahul" ,"Virat", "Mahendra Singh"),
  array("Tendulkar", "Rahul Dravid", "Kohli", "Dhoni")
);

$file = fopen("contacts.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?>