<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',  // Vite dev server
        'http://localhost:3000',  // Alternative dev server
        'http://mki-project-api.test', // Local Laravel
        // Αντικατέστησε με το πραγματικό Netlify domain σου
        'https://your-netlify-site.netlify.app',
    ],

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