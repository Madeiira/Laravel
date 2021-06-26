<html >
   <head>
      <meta charset="UTF-8">
      <center>
         <h1>   @yield('title') </h1>
      </center>

      <!-- FONT google --> 
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">


      <!-- CSS bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- CSS Application -->
      <link rel="stylesheet" href="/css/style.css">
      
      <script src="/js/script.js"></script>
   
    </head>
   <body>
      @yield('content')
      <footer>
         <center>
            <h4>
               <p >Project Larav &copy; 2021</p>
            </h4>
         </center>
      </footer>
   </body>
</html>