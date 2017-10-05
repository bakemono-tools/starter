#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \Console\CreateModuleCommand(__DIR__ . "/.."));
$application->add(new \Console\UpdateDatabaseSchemaCommand(__DIR__ . "/.."));


$application->run();