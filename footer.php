<?php

$limite = "6";

$sql_select = 'SELECT * FROM paginas WHERE Tipo = :Tipo ORDER BY id_pagina ASC LIMIT 6';
try{
	$query_select = $conecta->prepare($sql_select);
	$query_select->bindValue(':Tipo' , "galeria" , PDO::PARAM_STR);
    $query_select->execute();
	$resultado_galeria_footer = $query_select->fetchAll(PDO::FETCH_OBJ);
}catch (PDOexception $error_select){
   echo 'Erro ao selecionar '.$error_select->getMessage();
}
?>

<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3agile">
				<div class="col-md-4 footer-grids footer-address">
					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Contato:</h3>
					<ul>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-send"></i>Rua Barão do Rio Branco N°2777  <span> Rodeio (Santa Catarina) </span></li>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-phone"></i><?php echo $Telefone; ?> <span> <?php echo $Telefone2; ?> </span></li>
						<li class="wow slideInLeft animated" data-wow-delay=".5s"><i class="glyphicon glyphicon-envelope"></i> <?php echo $EmailPrincipal; ?> </li>
					</ul>

				</div>

				<div class="col-md-4 footer-grids">

					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Fotos Populares</h3>

                    <?php foreach($resultado_galeria_footer as $galeriafooter):?>

					<div class="footer-grd wow zoomIn animated" data-wow-delay=".5s">
						<a href="index.php?page=galeria">
							<img src="public/galeria/<?php echo $galeriafooter->imagem;?>" alt="" width="150" height="80" class="" />
						</a>
					</div>

                     <?php endforeach;?>

			
					<div class="clearfix"> </div>

				</div>

				<div class="col-md-4 footer-grids">
					<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Newsletter</h3>
					<div class="subscribe wow slideInRight animated" data-wow-delay=".5s">
						<form>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
							<input type="submit" value="Go">
						</form>

						<div class="clearfix"> </div>
					</div>

					<div class="social-icons wow slideInRight animated" data-wow-delay=".5s">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="https://www.facebook.com/Restaurante-e-pizzaria-Tipo-Caseiro-532213350133956/?ref=page_internal" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
							<li><a href="#" class="dott"> </a></li>
						</ul>
					</div>
				</div>

				<div class="clearfix"> </div>

			</div>

			<div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">

				<p>© 2017 Restaurante Tipo Caseiro. All rights reserved |  <a href="http://fabio.bagattoli.com.br">Fabio Bagattoli</a></p>

			</div>

		</div>	

	</div>	

	<!--//footer-->	

	<!-- start-smooth-scrolling-->

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

	<!--//end-smooth-scrolling-->
	<!--smooth-scrolling-of-move-up-->

	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>