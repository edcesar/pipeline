<?php
use League\Pipeline\Pipeline;
use App\SomaUm;
use App\SomaDois;
use App\SomaTres;

require_once 'vendor/autoload.php';

$pipeline = (new Pipeline)
    ->pipe(new SomaUm)
    ->pipe(new SomaDois)
    ->pipe(new SomaTres);

// Returns 16
echo $pipeline->process(10);