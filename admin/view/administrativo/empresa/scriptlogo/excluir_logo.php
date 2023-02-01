<?php include('conect_dbs.php');

	 	chdir("../public/imagelogo"); 
	$del = unlink($logorecibo);
	$id_deletar = $logorecibo;
	

	
		


?>
 
 
 <div class="col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">A logo atual foi removida.</h4>
      <div class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </div>
    </div>
<div class="widget-body">
      <div class="widget-main">
        <div class="form-group">
          <div class="col-xs-12">
          

 <a href="index.php?acao=logo-empresa" class="btn btn-info btn-sm"> Próximo Passo > </a>
    
    </div>
    </div>
    </div>
    </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
