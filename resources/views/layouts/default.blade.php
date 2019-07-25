<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','weibo app')-Laravel 新手入门教程</title>
  <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a calss="navbar-brand" href="/"><b style="size: 34px">Weibo App</b></a>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
        <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
      </ul>
    </div>
  </nav>
  <div>
     @yield('content')
  </div>

</body>
</html>
