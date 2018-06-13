<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Sampleaaa App') - 自己动手第一遍</title>
  <link rel="stylesheet"  href="/css/app.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  @include('layouts._header')

  <div class="container">
    <div class="col-md-offset-1 col-md-10">
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
</body>
</html>