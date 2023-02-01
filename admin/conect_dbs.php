<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

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
session_start(); if((!isset ($_SESSION['logins']) == true) and (!isset ($_SESSION['passwords']) == true))
 { unset($_SESSION['logins']); unset($_SESSION['passwords']); 
		header('location:login.php');
		exit;
		}
$ligado = $_SESSION['logins']; 


$ativado = 's';

$sql_select = 'SELECT * FROM conf WHERE ok = :ativado';
try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':ativado' , $ativado , PDO::PARAM_STR);
    $query_select->execute();
	$resultado_query = $query_select->fetchAll(PDO::FETCH_ASSOC);
	$count = $query_select->rowCount();
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
	if($count == '0'){
	  echo 'Nada encontrado'; 	
	}else{
	foreach($resultado_query as $linhas){
	}
	}
$logorecibo         = $linhas['logorecibo'];
?>


