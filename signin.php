<?php

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "f684b91c-dffd-4df6-8cbd-d9d524a6fabb";
$client_secret = "HvX8Q~sQiBS7AmD9lZstljDQNRkICYZbL50Aubdc";
$callback = "https://kutkujo.github.io/BibliotecaVirtual/Callback.php";
$scopes = ["User.Read"];

$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());
