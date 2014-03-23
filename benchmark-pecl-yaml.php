<?php

$sources = glob('yaml/*.yml');

foreach($sources as $source){
	benchmark(1000, function() use ($source){
		yaml_parse_file($source);
	});
}