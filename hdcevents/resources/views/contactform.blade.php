<html >
<head><meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/script.js"></script>
</head>
<center>
<form action="" method=""> 
 <input type="hidden" name="recipient" value="exemplo@gmail.com"> 
 <input type="hidden" name="redirect" value="http://seudominio."> 
 <input type="hidden" name="subject" value="Assunto"> 
 <input type="hidden" name="email" value="email@doseudominio">  
 <p> 

 <input type="text" size="30" name="nome" placeholder="Name"> 
 </p>   
 
 <p>

 <input type="text" size="30" name="replyto" placeholder="E-Mail"> 
 </p>   
 
 <p> 

 <input type="text" size="35" name="Comentarios" placeholder="Comments"> 
 </p>   
 
 <p> 
 <input type="submit" name="BTEnvia" value="Send"> 
 <input type="reset" name="BTApaga" value="Erase"> </p> 
 </form>
 
 <a href="/"> Back to Welcome. </a>
 @if ($bool == 1)<!--@ to init a blade code and don't necessary {.{}.} to use vars -->
 <h4>Your IP:{{ $ipaddress }}</h4> <!-- {.{}.} to enable code because don't have a @ to use blade code-->
 @else
 <h3>Don't have permission to access your IP.</h3>
 @endif

 @foreach ($nomes as $nome)
 
    <p> Index:{{$loop->index}}.</p>
    <p> Name: {{ $nome }}.</p>
    
@endforeach
 </center>
</html> 
