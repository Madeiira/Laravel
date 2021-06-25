<html>
<head><meta charset="UTF-8"></head>
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
 <p>Your IP:{{ $ipaddress }}</p>
 </center>
</html> 

<style>
    input{
        text-align:center;
    }
</style>