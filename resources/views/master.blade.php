<html>
   
   <head>
      <title>@yield('title')</title>
   </head>
   
   <body>
      
      <div class = "container">
         @yield('content')
      </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ URL::asset('css/res.css') }}" />
   </body>
</html>