<?php
session_start();

define('SITE_NAME', 'ZenWeb Studio');
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
define('SITE_URL', $scheme . '://' . $host);
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'zenweb2026');

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function url($p = '') { return rtrim(SITE_URL, '/') . '/' . ltrim($p, '/'); }

function loadJSON($file) {
    $path = __DIR__ . '/data/' . $file;
    if (!file_exists($path)) return [];
    return json_decode(file_get_contents($path), true) ?: [];
}

function saveJSON($file, $data) {
    file_put_contents(__DIR__ . '/data/' . $file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function loadData($file) { return loadJSON($file); }
function saveData($file, $data) { saveJSON($file, $data); }

function isLoggedIn() { return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true; }
function requireLogin() { if (!isLoggedIn()) { header('Location: login.php'); exit; } }

function flash($key, $val = null) {
    if ($val !== null) $_SESSION['flash'][$key] = $val;
    else return $_SESSION['flash'][$key] ?? null;
}
