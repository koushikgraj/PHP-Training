<?php

$filename = './contacts.csv';
$data = [];

try {
	$f = fopen($filename, 'r');

	while ($row = fgetcsv($f)) {
		$data[] = $row;
	}
	echo "<pre>";
	print_r($data);
	echo "</pre>";
} catch (\Throwable $e) {
	echo $e->getMessage();
} finally {
	if (!$f) {
		fclose($f);
	}
}