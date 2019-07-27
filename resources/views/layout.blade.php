<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <title>reading</title>
</head>
<body>
    <div id="header" >
        @yield('header')
    </div>
  <div id="content">
       @yield('content')
  </div>
    <div id="footer">
        @yield('footer')
    </div>

</body>
</html>