<?php
// Local dev router for `php -S localhost:8000 router.php`.
// Mirrors the clean-URL rewrite rules in .htaccess (Apache-only, so the
// built-in server needs this to behave the same way as production).

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$docroot = __DIR__;

// Let real files/directories (assets, blog/, etc.) be served as-is.
if ($uri !== '/' && file_exists($docroot . $uri) && !is_dir($docroot . $uri)) {
    return false;
}

// /product/{slug} -> product.php?name={slug}
if (preg_match('#^/product/([a-zA-Z0-9_-]+)$#', $uri, $m)) {
    $_GET['name'] = $m[1];
    require $docroot . '/product.php';
    return true;
}

$path = trim($uri, '/');
if ($path === '') {
    $path = 'index';
}

if (is_file($docroot . '/' . $path . '.php')) {
    require $docroot . '/' . $path . '.php';
    return true;
}

if (is_file($docroot . '/' . $path . '.html')) {
    require $docroot . '/' . $path . '.html';
    return true;
}

http_response_code(404);
echo "404 Not Found: $uri";
return true;
