<?php

// Auto-detect base URL dari nama folder
$scriptPath = dirname($_SERVER['SCRIPT_NAME']);
$baseUrl = rtrim($scriptPath, '/') === '' ? '/' : $scriptPath;
define('BASE_URL', $baseUrl);

require_once __DIR__ . '/src/route/route.php';

