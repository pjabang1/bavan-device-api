<?php
error_reporting(E_ALL);
 ini_set("display_errors", 1);
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
try 
{
    $m = new Mongo(); // connect
    $db = $m->selectDB("example");
}
catch ( MongoConnectionException $e ) 
{
    echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
    exit();
}


$app->get('/hello/{name}', function ($name) use ($app) {
  return 'Hello '.$app->escape($name);
});

$app->run();
