<?php
$absolute = dirname($_SERVER['SCRIPT_FILENAME']);
$siteUrl = dirname($_SERVER['SCRIPT_NAME']);
$baseUrl = $_SERVER['HTTP_HOST'];
$path = $baseUrl.$siteUrl;
$rootUrl = $_SERVER['DOCUMENT_ROOT'];
var_dump($siteUrl);
 ?>
