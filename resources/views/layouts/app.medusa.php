<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Device/Browser -->
  <meta name="theme-color" content="#007bff">
  <meta name="msapplication-navbutton-color" content="#007bff">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name='csrf-token' content="{{ $csrf_token }}"/>
  <title>{% yield('title') %}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
  <div id="app">
    {% yield('main') %}
  </div>

  <script src="/js/prism/prism.js"></script>
  <script src="/js/prism/prism-markup-templating.min.js"></script>
  <script src="/js/prism/prism-php.min.js"></script>
  <script src="/js/prism/prism-twig.min.js"></script>
</body>
</html>
