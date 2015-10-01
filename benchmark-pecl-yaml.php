<?php

$sources = glob('yaml/*.yml');

foreach($sources as $source){
	benchmark(1000, function() use ($source){
		$data = yaml_parse_file($source);
	});
	$data = yaml_parse_file($source);
	yaml_emit_file('result/pecl-yaml/' . basename($source), $data);
}