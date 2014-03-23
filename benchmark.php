<?php

function benchmark($runs, $callable){
	$start = microtime(true);

	for ($i = 0; $i < $runs; $i++){
		$callable();
	}

	$total = microtime(true) - $start;
	$avg = $total / $runs;

	echo "Total: {$total}\n";
	echo "Average: {$avg}\n";
}

echo "PECL YAML\n";
include 'benchmark-pecl-yaml.php';

echo "\nSymfony YAML\n";
include 'benchmark-symfony-yaml.php';

echo "\nSpyc YAML\n";
include 'benchmark-spyc.php';