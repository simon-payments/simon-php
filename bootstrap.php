<?php

require(__DIR__ . '/src/Simon/Settings.php');
require(__DIR__ . '/tests/Simon/Fixtures.php');
require(__DIR__ . '/src/Simon/Bootstrap.php');

use \Simon\Tests\Fixtures;
use \Simon\Settings;
use \Simon\Bootstrap;

$processing_url = getenv("PROCESSING_URL");
if ($processing_url == null) {
    $processing_url =  "https://api-staging.simonpayments.com";
}

Fixtures::$apiUrl = $processing_url;

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();
