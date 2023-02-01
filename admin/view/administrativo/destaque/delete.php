<?php include('conect_dbs.php'); 
	
 
	$id                   = addslashes($_GET['id']);
	


 if(isset($_POST['enviar'])){
	 
	 $tipopagina               = "destaque";
	  $id               = $_POST['id'];
	 


	$query_update = $conecta->prepare("DELETE FROM paginas WHERE id_pagina = :id_pagina AND Tipo = :Tipo");
	$query_update->bindValue(':Tipo' , $tipopagina , PDO::PARAM_STR);
	$query_update->bindValue(':id_pagina' , $id , PDO::PARAM_INT);
	$query_update->execute();


 echo "<script>window.location = 'index.php?acao=destaque&msg=3'</script>";
$query_update = NULL;
unset($_SESSION['captcha']);
	exit;
	 }

?>

<div class="page-header">
							<h1>
								&nbsp;&nbsp; Excluir
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Mensagens no topo do site
								</small>
                                 
                             
                              
                              
							</h1>
						</div>
                        
         
<div classe="page-header">
                       
             <div class="col-xs-12 col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">Voce tem certeza que deseja excluir</h4>
      <span class="widget-toolbar"> <a href="#" data-action="settings"> <i class="ace-icon fa fa-cog"></i> </a> <a href="#" data-action="reload"> <i class="ace-icon fa fa-refresh"></i> </a> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </span> </div>
    <div class="form-group has-info">
      <div class="widget-main">
      
     <form name="novo" action="" enctype="multipart/form-data" method="post">

<input name="id" type="hidden" id="id" value="<?php echo $id;?>" />
        <p>&nbsp;</p>
        <center>
                                <input type="submit" name="enviar" value="Sim, Excluir" class="btn btn-info btn-sm" style="margin-top: 10px; margin-right: 1000px;"/>
                              </center>
                               </form>
        

      </div>
    </div>
  </div>
  
  <p>&nbsp;</p>

                              </div>
                              </div>

                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>