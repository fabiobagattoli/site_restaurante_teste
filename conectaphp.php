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


$ativado = 's';

//////////////////////////////////////////////////////////////////////////////////////////
$sql_select = 'SELECT * FROM conf';
try{
	$query_select = $conecta->prepare($sql_select);
    $query_select->execute();
	$resultado = $query_select->fetchAll(PDO::FETCH_ASSOC);
	$count = $query_select->rowCount();
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
	if($count == '0'){
	  echo 'Nada encontrado'; 	
	}else{
	foreach($resultado as $linhas){
	}
	}
$logorecibo        = $linhas['logorecibo'];
$Telefone          = $linhas['Telefone'];
$Telefone2         = $linhas['Telefone2'];
$EmailPrincipal    = $linhas['EmailPrincipal'];
$EndEmil           = $linhas['EndEmil'];
$detalhes          = $linhas['detalhes'];
$Fantasia          = $linhas['Fantasia'];
	
//////////////////////////////////////////////////////////////////////////////////////////	
	
			$sql_select = 'SELECT * FROM paginas WHERE Tipo = :Tipo';
try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':Tipo' , "destaque" , PDO::PARAM_STR);
	
    $query_select->execute();
	$resultado_destaque = $query_select->fetchAll(PDO::FETCH_OBJ);
	
	
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}


//////////////////////////////////////////////////////////////////////////////////////////////
			$sql_select = 'SELECT * FROM paginas WHERE Tipo = :Tipo';
try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':Tipo' , "msgtopo" , PDO::PARAM_STR);
	
    $query_select->execute();
	$resultado_query = $query_select->fetchAll(PDO::FETCH_OBJ);
	
	
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}




?>