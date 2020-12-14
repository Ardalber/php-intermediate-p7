<?php

use symphony\component\yaml\yaml;

require __DIR__.'/../vendor/autoload.php';

$config = yaml::parseFile(__DIR__.'/../config/config.yaml');

dump($config);

