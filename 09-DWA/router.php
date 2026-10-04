<?php
// 1. Get the URI (this is currently giving you "/ErwinSite/09-DWA/contact")
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// 2. Define your base folder
$baseFolder = '/ErwinSite/09-DWA';

// 3. Remove the base folder from the URI string
// This turns "/ErwinSite/09-DWA/contact" into just "/contact"
$route = str_replace($baseFolder, '', $uri);

// --- OPTIONAL BUT RECOMMENDED: Remove query strings ---
// This strips everything after the '?' so your routes match perfectly.
$route = strtok($route, '?');

// 4. Define the routes array
$routes = [
    '/' => 'controllers/index.php',
    '/index.php' => 'controllers/index.php', // Kept your original fallback
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
];


function routeToController($route, $routes)
{
    // 5. Check if the route exists and require the file
    if (array_key_exists($route, $routes)) {
        require $routes[$route];
    } else {

        abort();

    }
}

function abort($code = 404)
{
    // A fallback just in case
    http_response_code($code);
    // echo "404 - Route not found: " . $route;
    require "views/{$code}.php";

    die(); // Stop further execution
}

routeToController($route, $routes);