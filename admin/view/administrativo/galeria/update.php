<?php include('conect_dbs.php'); 

            $id                 = strip_tags(trim($_GET['id']));
						$Tipo               = "galeria";


 $sql_consulta = 'SELECT * FROM paginas WHERE Tipo = :Tipo AND id_pagina = :id_pagina';
try{
	$query_consulta = $conecta->prepare($sql_consulta);
	$query_consulta->bindValue(':Tipo' , $Tipo , PDO::PARAM_STR);
	$query_consulta->bindValue(':id_pagina' , $id , PDO::PARAM_STR);
  $query_consulta->execute();
	$resultado_consulta = $query_consulta->fetchAll(PDO::FETCH_OBJ);
	$count = $query_consulta->rowCount();
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

	



 

                        $Nome               = strip_tags(trim($_POST['Nome']));

                        $Obs                = strip_tags(trim($_POST['Obs']));

						

						$id                 = $_POST['id'];

						$Tipo               = "destaque";

                        





try {



$query_update = $conecta->prepare("UPDATE paginas SET Nome = :Nome, Obs = :Obs WHERE Tipo = :Tipo AND id_pagina = :id_pagina");

	$query_update->bindValue(':Nome',$Nome,PDO::PARAM_STR);

	$query_update->bindValue(':Obs',$Obs,PDO::PARAM_STR);

	$query_update->bindValue(':Tipo',"galeria",PDO::PARAM_STR);

	$query_update->bindValue(':id_pagina',$id,PDO::PARAM_INT);



	$query_update->execute();

	

	

	}catch (PDOexception $error_select){

   echo 'Erro ao selecionar '.$error_select->getMessage();

}



$query_update = NULL;



 echo "<script>window.location = 'index.php?acao=alterar-galeria&id=$id&msg=2'</script>";

exit;



 }else

  

 $query_update = NULL;



?>



<div class="page-header">

							<h1>

								&nbsp;&nbsp; Alterar

								<small>

									<i class="ace-icon fa fa-angle-double-right"></i>

									Titulo

								</small>

							</h1>

						</div>

  <center>  

                              

                              <a class="btn btn-info btn-sm" href="index.php?acao=galeria"> Listar todos </a>

                                 

					         

                                 

                              <a class="btn btn-sm btn-success" href="index.php?acao=novo-galeria"> Criar novo </a>

                              

                                 

					          </center>

                              <p>&nbsp;</p>

                              <?php include('paginas_msg.php'); pagmsg();?>

                              <p>&nbsp;</p>

                              

                              

<div classe="page-header">

                       

             <div class="col-xs-14 col-sm-8">

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

            <input type="text" class="col-xs-12 col-sm-8" id="form-field-mask-2" name="Nome" value="<?php echo $registro->Nome; ?>" />

          </div>

        </div>

        <hr />

        

     

        <div>

															<label for="form-field-8">Detalhes</label>



															<textarea class="form-control" name="Obs" id="form-field-8" placeholder="Digite aqui"><?php echo $registro->Obs; ?></textarea>

		</div>

        

          <hr />

        <div>

       <?php if($imagem != '0') { ?> <a href="index.php?acao=deletar-foto-galeria&id=<?php echo $registro->id_pagina; ?>" class="btn btn-info btn-sm">Alterar Foto</a>  <?php } ?>

       <?php if($imagem == '0') { ?> 

       

       <a href="index.php?acao=foto-galeria" class="btn btn-info btn-sm"> Nova Foto</a>

       

         <?php } ?>

        

         <div> <img src="../public/galeria/<?php echo $registro->imagem; ?>" alt="User Image" width="600" height="200" class="user-image"/>

        </div>

        </div>

        <hr />

        <p>&nbsp;</p>

     

        

<input name="id" type="hidden" id="id" value="<? echo $registro->id_pagina;?>" />

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

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>

                              <p>&nbsp;</p>