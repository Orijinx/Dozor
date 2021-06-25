<?php 


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->Load();

include __DIR__."./routes/web.php";