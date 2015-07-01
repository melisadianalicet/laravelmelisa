<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Escuela unicor</title>
    <link href="{!!('css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>
  <body  background="{!!('css/fondo.jpg')!!}">
    <div class="container">
   <form class="form-signin" id="form-signin" name="form-signin"  method="post" action="{!!('iralmenu')!!}"   role="form">    
       <MARQUEE scrolldelay="1" width="100%" height="60"><center><h1 class="form-signin-heading"><b><FONT face="gabriola" size ="9" color="#26CE53"> ~ Escuela Unicor ~ </FONT></b></h1></center></MARQUEE>
       <br></br>
       <center><h2 class="form-signin-heading"><b><FONT face="gabriola" size="6" color="#26CE53">~ Iniciar Sesion ~</FONT></b></h2></center>
<div class="form-group">
         <center><input name="usu"   style="width:400px; height:50px" type="email" id="usu" class="form-control" placeholder="usuario" required>
        <input name="pass"   style="width:400px; height:50px" type="password" class="form-control" placeholder="identificacion" required>         
        </label>
        <button  style="width:400px; height:50px" class="btn btn-lg btn-primary btn-block" type="submit"  name="submit" >iniciar sesión</button>
      </center></form>
    </div>
     </div>
    </div>   
  </body>
</html>
