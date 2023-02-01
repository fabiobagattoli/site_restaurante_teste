<?php 
session_start();
if ($_POST['estado'] == "ss"){
		header("location:login.php");
}else{
$login1 = $_POST['logins']; 
$senha1 = $_POST['passwords'];
$login = addslashes($login1);
$senha = addslashes($senha1);

$totalcha = $senha;
$codificadas = sha1($totalcha);

define('HOST','localhost');
define('DB','restaurante');
define('USER','root');
define('PASS','');

$conexao = 'mysql:host='.HOST.';dbname='.DB;
try{
	$conecta = new PDO($conexao,USER,PASS);
	$conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}catch (PDOexception $error_conecta){
   echo htmlentities('Erro ao conectar '.$error_conecta->getMessage());
}
}
$ativo = "1";
// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$sql_select = 'SELECT * FROM admins WHERE ok = :estado AND login = :login AND senha = :senha';

try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':estado' , $ativo , PDO::PARAM_INT);
	$query_select->bindValue(':login' , $login , PDO::PARAM_STR);
	$query_select->bindValue(':senha' , $codificadas , PDO::PARAM_STR);
	
    $query_select->execute();
	$resultado_query = $query_select->fetchAll(PDO::FETCH_ASSOC);
	
	$count = $query_select->rowCount();
	
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
	if($count == '0'){
	  echo 'Nada encontrado'; 	
	}else{
	
	foreach($resultado_query as $res){

	}
	}
if ($res > 0 ) { $_SESSION['logins'] = $res['login']; $_SESSION['passwords'] = $res['senha'];  header('location:index.php'); } else{ unset ($_SESSION['logins']); unset ($_SESSION['passwords']); 
		header('location:login.php');
		exit;
};
?>