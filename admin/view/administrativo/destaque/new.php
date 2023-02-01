<?php require_once('conect_dbs.php');

if(isset($_POST['enviar'])){

            $Nome               = strip_tags(trim($_POST['Nome']));
            $Obs                = strip_tags(trim($_POST['Obs']));
						$valor              = strip_tags(trim($_POST['valor']));
						$tipopagina         = "destaque";

try {

	$query_novo = $conecta->prepare('INSERT INTO paginas (Nome,Obs,Tipo,Titulo) 
VALUES (:Nome,:Obs,:Tipo,:valor)');
	$query_novo->bindValue(':Nome',$Nome,PDO::PARAM_STR);
	$query_novo->bindValue(':Obs',$Obs,PDO::PARAM_STR);
	$query_novo->bindValue(':valor',$valor,PDO::PARAM_STR);
	$query_novo->bindValue(':Tipo',$tipopagina,PDO::PARAM_STR);
	$query_novo->execute();
		} catch (PDOException $exception) {
    var_dump($exception);
}
$query_novo = NULL;
 unset($_SESSION['captcha']);
 echo "<script>window.location = 'index.php?acao=destaque&id&msg=1'</script>";
exit;

} unset($_SESSION['captcha']);
 ?>


<div class="page-header">
							<h1>
								&nbsp;&nbsp; Criar novo
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Destaque
								</small>
							</h1>
						</div>
  <center>  

                              <a class="btn btn-info btn-sm" href="index.php?acao=destaque"> Listar todos </a>
                              <a class="btn btn-sm btn-success" href="index.php?acao=novo-destaque"> Criar novo </a>
					          </center>

                              <p>&nbsp;</p>
                              <?php include('paginas_msg.php'); pagmsg();?>
                              <p>&nbsp;</p>

<div classe="page-header">
<div class="col-xs-12 col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">Destaque</h4>
      <span class="widget-toolbar"> <a href="#" data-action="settings"> <i class="ace-icon fa fa-cog"></i> </a> <a href="#" data-action="reload"> <i class="ace-icon fa fa-refresh"></i> </a> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </span> </div>
    <div class="form-group has-info">
      <div class="widget-main">

     <form name="novo" action="" enctype="multipart/form-data" method="post">

                <div>
          <label for="inputInfo">Nome<small class="col-xs-12 col-sm-3 control-label no-padding-right"></small></label>
          <div class="input-group"> <span class="input-group-addon"> </i></span>
            <input type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" name="Nome" value="<?php echo $Nome; ?>" />
          </div>
        </div>
        <hr />

      
         <div>
          <label for="inputInfo">Valor<small class="col-xs-12 col-sm-3 control-label no-padding-right"></small></label>
          <div class="input-group"> <span class="input-group-addon"> </i></span>
            <input type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" name="valor" value="<?php echo $valor; ?>" />
          </div>
        </div>
        <hr />

        
                 <div>
															<label for="form-field-8">Detalhes</label>
															<textarea class="form-control" name="Obs" id="form-field-8" placeholder="Digite aqui"><?php echo $registro->Obs; ?></textarea>

		</div>

        <p>&nbsp;</p>
      </div>
    </div>
  </div>

  <p>&nbsp;</p>


                               <center>
                                <input type="submit" name="enviar" value="Salvar" class="btn btn-info btn-sm" style="margin-top: 10px; margin-right: 1000px;"/>
                              </center>
                               </form>
                              </div>
                              </div>
                             
     <p>&nbsp;</p>

                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>