<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <br/>
   <div class="container">
       @include('flash::message')

       @yield('content')
   </div>

    @include('partials.flashjs')
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    @yield('footer')
</body>
</html>
