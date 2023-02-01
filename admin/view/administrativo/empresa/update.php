<?php include('conect_dbs.php');  

$sql_consulta = 'SELECT * FROM conf';
try{
	$query_consulta = $conecta->prepare($sql_consulta);
  $query_consulta->execute();
	$resultado_consulta = $query_consulta->fetchAll(PDO::FETCH_ASSOC);
	$count = $query_consulta->rowCount();
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
	if($count == '0'){
	  echo 'Nada encontrado'; 	
	}else{
	foreach($resultado_consulta as $linhas){
	}
	}

          $Fantasia           = $linhas['Fantasia'];
          $Telefone           = $linhas['Telefone'];
          $Telefone2          = $linhas['Telefone2'];
          $EmailPrincipal     = $linhas['EmailPrincipal'];
          $EndEmil            = $linhas['EndEmil'];
					$detalhes           = $linhas['detalhes'];

if(isset($_POST['enviar'])){
          $Fantasias           = addslashes(trim($_POST['Fantasia']));
          $Telefones           = addslashes(trim($_POST['Telefone']));
          $Telefone2s          = addslashes(trim($_POST['Telefone2']));
          $EmailPrincipals     = addslashes(trim($_POST['EmailPrincipal']));
          $EndEmils            = addslashes(trim($_POST['EndEmil']));
					$detalhess          = addslashes(trim($_POST['detalhes']));

try {
	$query_update = $conecta->prepare("UPDATE conf SET Fantasia = :Fantasia, Telefone = :Telefone, Telefone2 = :Telefone2, EmailPrincipal = :EmailPrincipal, EndEmil = :EndEmil, detalhes = :detalhes");
	$query_update->bindValue(':Fantasia' , $Fantasias , PDO::PARAM_STR);
	$query_update->bindValue(':Telefone' , $Telefones , PDO::PARAM_STR);
	$query_update->bindValue(':Telefone2' , $Telefone2s , PDO::PARAM_STR);
	$query_update->bindValue(':EmailPrincipal' , $EmailPrincipals , PDO::PARAM_STR);
	$query_update->bindValue(':EndEmil' , $EndEmils , PDO::PARAM_STR);
	$query_update->bindValue(':detalhes' , $detalhess , PDO::PARAM_STR);
  $query_update->execute();
}catch (PDOexception $error_update){
    echo 'Erro ao atualizar '.$error_update->getMessage();
}
$query_update = NULL;
 echo "<script>window.location = 'index.php?acao=home'</script>"; 
}	
?>

<div class="page-header">
							<h1>
								&nbsp;&nbsp; Empresa
								<small>
								<i class="ace-icon fa fa-angle-double-right"></i> </small>
							</h1>
						</div>

          
<div class="col-xs-12 col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">Dados da Empresa</h4>
      <span class="widget-toolbar"> <a href="#" data-action="settings"> <i class="ace-icon fa fa-cog"></i> </a> <a href="#" data-action="reload"> <i class="ace-icon fa fa-refresh"></i> </a> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </span> </div>
    <div class="form-group has-info">
      <div class="widget-main">

          <form name="novo" action="" enctype="multipart/form-data" method="post">

        <div>
          <label for="form-field-mask-2">Nome <small class="text-warning"></small> </label>
          <div class="input-group"> <span class="input-group-addon"> </i> </span>
            <input name="Fantasia" type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" value="<?php echo $Fantasia; ?>" />
          </div>
        </div>
        <hr />

        <div>
          <label for="form-field-mask-2"> Telefone</label>
          <div class="input-group">
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-phone"></i>
																</span>
																<input name="Telefone" type="text" class="col-xs-12 col-sm-8" id="form-field-mask-" value="<?php echo $Telefone; ?>" />
          </div>
        </div>
        <hr />

        <div>
          <label for="form-field-mask-2"> Telefone 2</label>
          <div class="input-group">
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-phone"></i>
																</span>
																<input name="Telefone2" type="text" class="col-xs-12 col-sm-8" id="form-field-mask-3" value="<?php echo $Telefone2; ?>" />
          </div>
        </div>
        <hr />

        <div>Email Principal
          <div class="input-group"> <span class="input-group-addon"> </i></span>
            <input name="EmailPrincipal" type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" value="<?php echo $EmailPrincipal; ?>" />
          </div>
        </div>

          <hr /> <hr /> <hr /> <hr /> 
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">Banner - Página inicial</h4>
      <span class="widget-toolbar"> <a href="#" data-action="settings"> <i class="ace-icon fa fa-cog"></i> </a> <a href="#" data-action="reload"> <i class="ace-icon fa fa-refresh"></i> </a> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </span> </div>
    <div class="form-group has-info">
      <div class="widget-main">
        <div>
       <?php if($logorecibo != '0') { ?> <a href="index.php?acao=del-logo-empresa" class="btn btn-info btn-sm">Alterar Banner de Promoção</a>  <?php } ?>
       <?php if($logorecibo == '0') { ?> 
       <a href="index.php?acao=logo-empresa" class="btn btn-info btn-sm"> Nova Banner de promoção</a>

         <?php } ?>
         <div> <img src="../public/imagelogo/<?php echo $logorecibo;?>" alt="User Image" width="600" height="200" class="user-image"/>
        </div>
        </div>
        <hr />

         <div>Título -  Imagem
           <div class="input-group"> <span class="input-group-addon"> </i></span>
            <input name="EndEmil" type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" value="<?php echo $EndEmil; ?>" />
          </div>
        </div>
        <hr />

       <div>

															<label for="form-field-8">Mais detalhes</label>
															<textarea class="form-control" name="detalhes" id="form-field-8" placeholder="Digite aqui"><?php echo $detalhes; ?></textarea>
		</div>

          </div>
        </div>
        <hr />
      </div>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

<center>
  <input type="submit" name="enviar" value="Salvar" class="btn btn-info btn-sm" style="margin-top: 10px; margin-right: 400px;"/>
</center>
</form>

 <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>