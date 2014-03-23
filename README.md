# YAML PHP Benchmark

### Why?

I often see Symfony/Yaml being user for YAML processing in PHP, but I myself uses PECL YAML instead and was wondering about performance, so I'd setup a simple benchmark test.

### Requirements

To run the tests yourself make sure you have met the following requirements:

- [PECL YAML](http://pecl.php.net/package/yaml) *(uses LibYAML)*
- [Symfony/Yaml](http://symfony.com/doc/current/components/yaml/introduction.html) *(pure PHP)*
- [Spyc](https://github.com/mustangostang/spyc) *(pure PHP)*

Installing PECL Yaml can be done by running:
```bash
$ pecl install yaml
```

Symfony/Yaml and Spyc should be installed using [Composer](https://getcomposer.org/) by running:
```bash
$ composer install
```
<small>*NB. I did not use composer's autoload feature as it may interfere with the test results*</small>

### Results

The test pointed out that Symfony/Yaml is by far the *slowest* parser:

```bash
$ php -f ./benchmark.php

PECL YAML
Total: 0.24177002906799
Average: 0.00024177002906799
Total: 0.21856594085693
Average: 0.00021856594085693

Symfony YAML
Total: 5.2555449008942
Average: 0.0052555449008942
Total: 2.9924311637878
Average: 0.0029924311637878

Spyc YAML
Total: 3.5280780792236
Average: 0.0035280780792236
Total: 2.0810060501099
Average: 0.0020810060501099
```
*In seconds per a 1000 runs*

This test doesn't verify the correctness of the parser, only the speed.