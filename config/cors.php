<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [
        // Επιτρέπει όλα τα Netlify domains
        '/^https:\/\/.*\.netlify\.app$/',
        // Επιτρέπει και τα preview deployments
        '/^https:\/\/.*--.*\.netlify\.app$/',
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];