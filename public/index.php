<?php

require '../vendor/autoload.php';

/**
 * Initialise l'application et ses composants
 * (ModuleManager, Router, Renderer, DatabaseConnection, Executor)
 */
$app = new \Framework\App();

/**
 * Execute la requête
 */
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());

\Http\Response\send($response);