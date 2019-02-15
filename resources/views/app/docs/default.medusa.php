<!--%L2xheW91dHMvZG9jcw==%-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    Documentations | {{ config('app.name') }}
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Description">
  <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  {% foreach config('docsify.sheets') as $sheet %}
    <link rel="stylesheet" href="{{ $sheet }}">
  {% endforeach %}

  <style>
    body {
      font-size: 13px;
      line-height: 1.9;
    }

    .select-style {
      padding: 0;
      margin: 0;
      border: 1px solid #ccc;
      width: 55px;
      border-radius: 3px;
      background-color: #fff;

      background: #fff url("http://www.scottgood.com/jsg/blog.nsf/images/arrowdown.gif") no-repeat 90% 50%;
    }

  .select-style select {
      padding: 5px 8px;
      width: 55px;
      border: none;
      box-shadow: none;
      background-color: transparent;
      background-image: none;
      -webkit-appearance: none;
        -moz-appearance: none;
              appearance: none;
    }

    .select-style select:focus {
      outline: none;
    }
  </style>

</head>
<body>
  <nav id="nav" data-versions="{{ json_encode($versions) }}">
    <ul>
      <li><a href="{{ url('/', true) }}">Home</a></li>
      <li>
        <div class="select-style">
          <select id="versions" onclick="select(this);">
            {% foreach $versions as $version %}
              <option id="switch" data-title="{{ $version['title'] }}" {{ $version['selected'] ? 'selected' : '' }}>{{ $version['title'] }}</option>
            {% endforeach %}
          </select>
        </div>
      </li>
    </ul>
  </nav>
  <div id="app"></div>

  <script>
    window.$docsify = {% configToJson('docsify.config') %}

    let versions = JSON.parse(document.getElementById('nav').getAttribute('data-versions'));

    versions.forEach(function(route, i) {
      if (window.location.hash == route.hash) {
        document.getElementById('versions').selectedIndex = i;
      }
    });

    function select(e) {
      window.location.href = "{{ url('/docs/#/', true) }}" + e.value + "/";
    }

  </script>

  {% foreach config('docsify.scripts') as $script %}
    <script src="{{ $script }}"></script>
  {% endforeach %}
</body>
</html>

