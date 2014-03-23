<?php

include 'vendor/mustangostang/spyc/Spyc.php';

$sources = glob('yaml/*.yml');

foreach($sources as $source){
	benchmark(1000, function() use ($source){
		spyc_load_file($source);
	});
}