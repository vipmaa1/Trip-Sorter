<?php

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$tripSorter  = new TripSorter\TripCardsSorter();
$cards_array = $tripSorter->buildJourney();

echo "<pre>". $cards_array;
