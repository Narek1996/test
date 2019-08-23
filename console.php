/** console.php **/
#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Console\Application;
use Console\TimeCommand;
/**
 * Author: Narek Vardanya <vardanyan703@gmail.com>
 */

$db = new Capsule;
$db->addConnection([
    "driver" => "mysql",
    "host" =>"127.0.0.1",
    "database" => "console",
    "username" => "root",
    "password" => ""
]);
//Make this Capsule instance available globally.
$db->setAsGlobal();

// Setup the Eloquent ORM.
$db->bootEloquent();

$app = new Application('Console App', 'v1.0.0');
$app -> add(new TimeCommand());
$app -> run();