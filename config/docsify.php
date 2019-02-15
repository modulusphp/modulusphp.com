<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Documentations config file
  |--------------------------------------------------------------------------
  |
  */

  'config' => [
    'name' => 'Modulus',
    'repo' => '',
    'basePath' => '/api-docs',
    'loadSidebar' => true,
    'homepage' => config('app.version') . '/README.md',
    'themeColor' => '#3F51B5',
    'subMaxLevel' => 2,
    'alias' => [
      '/_sidebar.md' =>  config('app.version') . '/_sidebar.md'
    ],
    'search' => [
      'noData' => [
        '/' => 'No results!'
      ],
      'paths' => 'auto',
      'placeholder' => [
        '/' => 'Search'
      ]
    ]
  ],

  'scripts' => [
    '/js/docsify.js',
    '/js/search.js',
    '/js/prism-php.min.js'
  ],

  'sheets' => [
    '/css/vue.css'
  ]
];
