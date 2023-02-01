<?php include('conect_dbs.php'); 

$imagelogos = $_GET['id'];

 $sql_consulta = 'SELECT * FROM paginas WHERE Tipo = :Tipo AND id_pagina = :id_pagina';

try{
	$query_consulta = $conecta->prepare($sql_consulta);
	$query_consulta->bindValue(':Tipo' , "galeria" , PDO::PARAM_STR);
	$query_consulta->bindValue(':id_pagina' , $imagelogos , PDO::PARAM_INT);
	
    $query_consulta->execute();
	$resultado_consulta = $query_consulta->fetchAll(PDO::FETCH_OBJ);
	
	$count = $query_consulta->rowCount(PDO::FETCH_ASSOC);
	
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
    
	if($count == '0'){
	  echo 'Nada encontrado'; 	
	}else{
	
	foreach($resultado_consulta as $registro){

	}
	}
	


 if(isset($_POST['enviar'])){
	 

	
 // Extensões permitidas
    $extensoes = array(".jpg");
    // Caminho onde ficarão os arquivos
	$dataxml = date('Y-m-d');
  $caminho = '../public/galeria/';
    // Recuperando informações do arquivo
    $nome = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    // Verifica se a extensão é permitida
    if (!in_array(strtolower(strrchr($nome, ".")), $extensoes)) {
		$erro = 'Extensão inválida';
	}
    // Se não houver erro
    if (!isset($erro)) {
        // Gerando um nome aleatório para o arquivo
        $nomeAleatorio = $lhave.'-'.$dataxml.'-'.md5(uniqid(time())) . strrchr($nome, ".");
        // Movendo arquivo para servidor
        if (!move_uploaded_file($temp, $caminho . $nomeAleatorio))
            $erro = 'Não foi possível anexar o arquivo';
    }
  
	$query_update = $conecta->prepare("UPDATE paginas SET imagem = :imagem WHERE id_pagina = :id_pagina");
	$query_update->bindValue(':imagem' , $nomeAleatorio , PDO::PARAM_STR);
	$query_update->bindValue(':id_pagina' , $imagelogos , PDO::PARAM_INT);
    $query_update->execute();

       echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?acao=galeria&msg=2'>";
		
	}     
		
	            

?>

<div class="col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">Foto da galeria  ID = <?php echo $nome; ?></h4>
      <div class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </div>
    </div>
<div class="widget-body">
      <div class="widget-main">
        <div class="form-group">
          <div class="col-xs-12">
         
<form action="" enctype="multipart/form-data" name="cad_logo" method="post">
    	
        <span>Foto</span>
        <input type="file" name="img" id="id-input-file-2" value="Buscar Imagem"/> 

      <input type="submit" name="enviar" value="Aplicar" class="btn btn-info btn-sm" />
    </form>
    
    <div>
    
    
    </div>
    </div>
    </div>
    </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>