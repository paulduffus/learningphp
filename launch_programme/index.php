<?php

require_once('../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$programme  = $request->query->filter('programme', '');
$tutorial   = $request->query->filter('tutorial', '');

$tutorial = str_replace('.', '/', $tutorial);

if($programme && $tutorial)
{
    $myfile = fopen(__DIR__ . "/launch.command", "w") or die("Unable to open file!");


    $txt = <<<EOT
#!/usr/bin/env bash


open -a '$programme.app' ~/Sites/joomlatools-vagrant/www/learningphp/$tutorial/DIY/index.php
EOT;

    fwrite($myfile, $txt);
    fclose($myfile);

    echo "<h1>Congraulations $programme shortly will launch shortly";
}

