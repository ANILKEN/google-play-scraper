<?php

include __DIR__.'/../vendor/autoload.php';

use Anilken\GooglePlayScraper\Scraper;

$scraper = new Scraper();

$categories = $scraper->getCategories();
var_export($categories);
