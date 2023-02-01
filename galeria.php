<?php

			$sql_select = 'SELECT * FROM paginas WHERE Tipo = :Tipo';
try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':Tipo' , "galeria" , PDO::PARAM_STR);
	
    $query_select->execute();
	$resultado_galeria = $query_select->fetchAll(PDO::FETCH_OBJ);
	
	
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
// 
//	

?>

<div class="bnr-text wow slideInLeft animated" data-wow-delay=".9s">
				<h2 class="bnr-title wthree-title">Galeria de Fotos</h2>
			</div>	
		</div>	
	</div>	
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3 class="title">Galeria de Fotos</h3> 
			<div class="gallery-info">
            <?php foreach($resultado_galeria as $galeria):?>
				<div class="col-md-4 gallery-grids">
					<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="public/galeria/<?php echo $galeria->imagem;?>" data-lightbox="example-set" data-title="<center><?php echo $galeria->Obs;?></center>">
						<img src="public/galeria/<?php echo $galeria->imagem;?>" class="zoom-img" alt="" width="420" height="300" /> 
						<div class="b-wrapper">
							<h5><?php echo $galeria->Nome;?></h5> 
						</div> 
					</a> </br>
				</div>
                
            <?php endforeach;?> 
                
                  
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>	
		</div>	
	</div>	
	<!--//gallery--> 
	