<?php include('conect_dbs.php');

$galeria = $_GET['id'];
$imagens = $_GET['id'];


	 	chdir("public/galeria");
	$del = unlink($galeria);
	
	

	
		


?>

 
 <div class="col-sm-4">
  <div class="widget-box">
    <div class="widget-header">
      <h4 class="widget-title">A foto atual foi removida. ID = <?php echo $imagens;?></h4>
      <div class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </div>
    </div>
<div class="widget-body">
      <div class="widget-main">
        <div class="form-group">
          <div class="col-xs-12">
          

 <a href="index.php?acao=foto-galeria&id=<?php echo $imagens; ?>" class="btn btn-info btn-sm"> Próximo Passo > </a>
    
    </div>
    </div>
    </div>
    </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
