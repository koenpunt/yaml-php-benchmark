<?php

include 'vendor/symfony/yaml/Unescaper.php';
include 'vendor/symfony/yaml/Inline.php';
include 'vendor/symfony/yaml/Parser.php';
include 'vendor/symfony/yaml/Dumper.php';
include 'vendor/symfony/yaml/Escaper.php';
include 'vendor/symfony/yaml/Yaml.php';

use Symfony\Component\Yaml\Yaml;

$sources = glob('yaml/*.yml');

foreach($sources as $source){
	benchmark(1000, function() use ($source){
		Yaml::parse(file_get_contents($source));
	});
	$data = Yaml::parse(file_get_contents($source));
	file_put_contents('result/symfony-yaml/' . basename($source), Yaml::dump($data));
}
