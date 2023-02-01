<?php 

function pagmsg (){
		
$msg = strip_tags(trim($_GET['msg']));

$data_msg = date("d-m-Y ");
$hora_msg = date("H:i ");

?>

<?php if($msg == '1'){   ?> 
					 <div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Cadastrado com sucesso!
																</strong>

																Data e hora do Cadastro:  <?php echo $data_msg; ?> as <?php echo $hora_msg; ?>
																<br />
															</div>
					 <?php  };?>
					 
                     <?php if($msg == '2'){   ?> 
					 <div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Alterado com sucesso!
																</strong>

																Data e hora da alteração: <?php echo $data_msg; ?> as <?php echo $hora_msg; ?>
																<br />
															</div>
					 <?php  };?>
					 
                     <?php if($msg == '3'){ ?> 
					 <div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Excluído com sucesso!
																</strong>

																Data e hora da Exclusão:<?php echo $data_msg; ?> as <?php echo $hora_msg; ?>
																<br />
															</div>
					 <?php };?>
                     
                     <?php }?>
				