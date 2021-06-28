<html >
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>@yield('title')</title>
   


      <!-- FONT google --> 
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">


      <!-- CSS bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- CSS Application -->
      <link rel="stylesheet" href="/css/style.css">
      
      <script src="/js/script.js"></script>
   
    </head>
   <body>
        
       <header id="header"> 

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar" >
             <a href="/" class="navbar-brand">
                &emsp;<img src="/img/logo_lr.png" alt="Lr Proj">
             </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-secundary" href="/" class="nav-link"> Events </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="btn btn-secundary" href="/events/create" class="nav-link">&ensp; Creat Event </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secundary" href="/" class="nav-link">&ensp; Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secundary" href="/" class="nav-link">&ensp; Register </a>
                    </li>
                </ul>
            </div>
        </nav>

       </header>
      @yield('content')
      <footer id="footer">
         <center>
            <h4>
               <p >Project Larav &copy; 2021</p>
            </h4>
         </center>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   </body>
</html>