<?php
require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use App\Controllers\HomeController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$homeController = (new HomeController)->index();

