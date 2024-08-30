<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');
$user_dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $user_dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'name.env');

$user_dotenv->safeLoad();
// $nombre = $_ENV['NOMBRE'];
