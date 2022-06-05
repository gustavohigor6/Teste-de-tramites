<?php
ini_set("display_errors",0);
error_reporting(0);
if($_GET["acao"] == logar){
$logincorreto=luyz;
$sehhacorreta=luyz;
$user=$_POST["login"];
$pass=$_POST["senha"];
if($user==$logincorreto && $pass == $sehhacorreta) {
	
setcookie ("logado","1");
echo '
<script type="text/javascript">
alert("Logado com sucesso clique em ok");
location="info.php";
</script>
';
	
}else{
echo '
<script type="text/javascript">
alert("Usúario ou senha incorreta digite novamente clique em ok");
location="index.php";
</script>
';
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/luyz.jpg">

    <title>luyz Admin walker</title>

    
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="css/signin.css" rel="stylesheet">

   
    <script src="js/ie-emulation-modes-warning.js"></script>

	
	<style>
		h5,{
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					font-size:30px;
					color:#d9524d;
					letter-spacing:-0.05;
					text-shadow:2px 1px 1px #666;
		}
		body{
		  background: url('imagens/fundo.jpg') center center no-repeat fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		h2 {
					font-family:Georgia, "Times New Roman", Times, serif;
					font-style:italic;
					font-size:30px;
					color:#28a745;
					letter-spacing:-0.05;
					text-shadow:1px 1px 1px 	#000;
		}
	img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {display:none;}
		</style>
   
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" id="formulario" action="?acao=logar">
	  <center>
	  <img src="imagens/c.jpg" width="250px"  style="border-radius: 50%;">
	
        <h2 class="">Área Restrita</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-success"  type="submit" style="width:300px;">Acessar</button>
		<br>
		  </center>
	
      </form>
	  
	 
	  
	  
		
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

?>
