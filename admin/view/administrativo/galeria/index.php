<?php include('conect_dbs.php');
unset($_SESSION['captcha']);

define('QTDE_REGISTROS', 20);   
 define('RANGE_PAGINAS', 1);  
 
 if ($_SERVER['REQUEST_METHOD']=='POST'){
	
	$pesquisa = (isset($_POST['pesquisa']))? $_POST['pesquisa'] : '';
	$_SESSION['pesquisa'] = $pesquisa;	
}else{

	$pesquisa = $_SESSION['pesquisa'];
} 
   

 $pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;   
 $linha_inicial = ($pagina_atual -1) * QTDE_REGISTROS;  
$tipopagina   = "galeria"; 

 $sql = "SELECT * FROM paginas WHERE Nome LIKE :pesquisa AND Tipo = :Tipo LIMIT {$linha_inicial}, " . QTDE_REGISTROS;  
 $stm = $conecta->prepare($sql);
 $stm->bindValue(':Tipo',$tipopagina,PDO::PARAM_STR); 
 $stm->bindValue(':pesquisa' , "$pesquisa%" , PDO::PARAM_STR);  
 $stm->execute();   
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
   
 
 $sqlContador = "SELECT COUNT(*) AS total_registros FROM paginas WHERE Tipo = :Tipo";   
 $stm = $conecta->prepare($sqlContador); 
 $stm->bindValue(':Tipo',$tipopagina,PDO::PARAM_STR);   
 $stm->execute();   
 $valor = $stm->fetch(PDO::FETCH_OBJ);   
   
 
 $primeira_pagina = 1;   
 $ultima_pagina  = ceil($valor->total_registros / QTDE_REGISTROS);   
 $pagina_anterior = ($pagina_atual > 1) ? $pagina_atual -1 : 0 ;   
 $proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual +1 : 0 ;  
 $range_inicial  = (($pagina_atual - RANGE_PAGINAS) >= 1) ? $pagina_atual - RANGE_PAGINAS : 1 ;   
 $range_final   = (($pagina_atual + RANGE_PAGINAS) <= $ultima_pagina ) ? $pagina_atual + RANGE_PAGINAS : $ultima_pagina ;   
 $exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder'; 
 $exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder'; 
?>

<div class="page-header">
							<h1>
								&nbsp;&nbsp; Lista de
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Galeria
								</small>
							</h1>
						</div>
                        
<div classe="page-header">
                         <center>  
                              
                              <a class="btn btn-info btn-sm" href="index.php?acao=galeria"> Listar todos </a> 
                              <a class="btn btn-sm btn-success" href="index.php?acao=novo-galeria"> Criar novo </a>
					          </center>
                              </div>
                              <?php include('paginas_msg.php'); pagmsg();?>
                        
                        
<div class="widget-main">
<form id="formfiltro" name="formfiltro" method="post" target="_self">
														<div class="row">
															<div class="col-xs-14 col-sm-10">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="ace-icon fa fa-check"></i>
																	</span>

																	<input type="text" class="form-control search-query" name="pesquisa" placeholder="Digite o que procura" />
																	<span class="input-group-btn">
																		<button name="enviar" type="submit" value="Buscar" class="btn btn-purple btn-sm">
																			<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
																			Buscar
																		</button>
																	</span>
                                                                    </form>
																</div> 
  

	<div class="widget-header">
      <h4 class="widget-title">Galeria</h4>
      <span class="widget-toolbar"> <a href="#" data-action="settings"> <i class="ace-icon fa fa-cog"></i> </a> <a href="#" data-action="reload"> <i class="ace-icon fa fa-refresh"></i> </a> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> <a href="#" data-action="close"> <i class="ace-icon fa fa-times"></i> </a> </span> </div>
    <div class="form-group has-info">
      <div class="widget-main">
								<div class="row">
        
       <div class="col-xs-12">
		 <table id="simple-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th width="24" class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th width="39">Id   </th>
													<th width="60">Nome</th>
													<th width="80">Detalhes</th>
                                                    <th width="80">Imagem</th>
													<th width="20">Ações</th>
												</tr>
											</thead>

										                                                         <?php foreach($dados as $artigo):?> 
											<tbody>

												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
                                                        
													</td>

													<td>
														<a href="index.php?acao=alterar-galeria&id=<?php echo $artigo->id_pagina; ?>"><?php echo $artigo->id_pagina; ?></a>
													</td>
													<td><?php echo $artigo->Nome; ?></td>
                                                    <td><?php echo $artigo->Obs; ?></td>
                                                    <td><img src="../public/galeria/<?php echo $artigo->imagem; ?>" alt="User Image" width="150" height="100" class="user-image"/></td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
                                                        
														<a href="index.php?acao=alterar-galeria&id=<?php echo $artigo->id_pagina; ?>"	<button class="btn btn-xs btn-success">
																 <i class="ace-icon fa fa-check bigger-120"></i> 
															</button> </a>

															<a href="index.php?acao=alterar-galeria&id=<?php echo $artigo->id_pagina; ?>" <button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button> </a>

															<a href="index.php?acao=deletar-galeria&id=<?php echo $artigo->id_pagina; ?>" <button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button> </a>

														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="index.php?acao=alterar-galeria&id=<?php echo $artigo->id_pagina; ?>" class="tooltip-info" data-rel="tooltip" title="Ver">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="index.php?acao=alterar-galeria&id=<?php echo $artigo->id_pagina; ?>" class="tooltip-success" data-rel="tooltip" title="Editar">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="index.php?acao=deletar-galeria&id=<?php echo $artigo->id_pagina; ?>" class="tooltip-error" data-rel="tooltip" title="Excluir">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
                                                        
													</td>
												</tr>
                                            <?php endforeach; ?> 
									 		</tbody>
                                    
		 </table> 
            
         
            <center> <div>     
		 <div class='box-paginacao'>     
       
   
      <?php  
  
      for ($i=$range_inicial; $i <= $range_final; $i++):   
        $destaque = ($i == $pagina_atual) ? 'galeria' : '' ;  
        ?>   
        <a class="btn btn-info btn-sm" <?=$destaque?>' href="index.php?acao=galeria&page=<?=$i?>"><?=$i?></a>    
        &nbsp;&nbsp;
      <?php endfor; ?>    
                                    
</div>   
 
			
 </div> </center>

	 </div>
                                    
</div>
	  </div>     												
</div>       