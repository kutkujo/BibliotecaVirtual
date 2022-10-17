<?php

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "02ad6b4a-c64a-4b09-879b-aac6b05d5b4d";
$client_secret = "eBN8Q~6pX_9EMWcenzjM-rrqYi5GpdYtFu~YsanN";
$callback = "http://localhost:8080/callback.php";
$scopes = ["User.Read"];

$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());