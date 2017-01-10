<?php
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$tabUrl = explode("/", $url);
var_dump($tabUrl);