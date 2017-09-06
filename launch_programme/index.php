<?php

require_once('../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$programme  = $request->query->filter('programme', '');
$tutorial   = $request->query->filter('tutorial', '');
$testing    = $request->query->filter('testing', '');

$tutorial = str_replace('.', '/', $tutorial);

$filename = __DIR__ . "/launch.command";

if ($testing){
    $filename = __DIR__ . "/../launch.command";
}

if($programme && $tutorial)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");

    $txt = <<<EOT
#!/usr/bin/env bash

cp ~/Sites/joomlatools-vagrant/www/learningphp/composer.json ~/Sites/joomlatools-vagrant/www/diy.learningphp/composer.json;

mkdir -p ~/Sites/joomlatools-vagrant/www/diy.learningphp/$tutorial/ && cp -R ~/Sites/joomlatools-vagrant/www/learningphp/$tutorial/DIY/  ~/Sites/joomlatools-vagrant/www/diy.learningphp/$tutorial/;

open -a '$programme.app' ~/Sites/joomlatools-vagrant/www/diy.learningphp/$tutorial/;

cd ~/Sites/joomlatools-vagrant/www/diy.learningphp/; 

composer update;

EOT;

    fwrite($myfile, $txt);
    fclose($myfile);

    //sleep for 5 seconds
    sleep(5);
}

