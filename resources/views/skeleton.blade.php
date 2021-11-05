<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('meta')
</head>
<body id="body" class="dark">
    <div class="navbar">
      <h3 id="home">
        <a href="{{ route('index') }}">Home</a>
      </h3>
      <h3 id="schools">
        <a href="{{ route('schools') }}">Schools</a>
      </h3>
      <h3 id="theme">Theme</h3>
    </div>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>