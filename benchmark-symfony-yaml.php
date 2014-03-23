<?php

include 'vendor/symfony/yaml/Symfony/Component/Yaml/Exception/ExceptionInterface.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Exception/RuntimeException.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Exception/ParseException.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Unescaper.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Inline.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Parser.php';
include 'vendor/symfony/yaml/Symfony/Component/Yaml/Yaml.php';

$sources = glob('yaml/*.yml');

foreach($sources as $source){
	benchmark(1000, function() use ($source){
		Symfony\Component\Yaml\Yaml::parse($source);
	});
}