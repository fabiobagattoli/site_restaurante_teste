
            
            <!--//header-->
            
			<div class="bnr-text wow slideInUp animated" data-wow-delay=".5s">
				<div class="flexslider">
					<ul class="slides">
                     <?php foreach($resultado_query as $msgtopo):?> 
					  <li>
							<h2 class="bnr-title"><?php echo $msgtopo->Nome;?></h2> 
						<p><?php echo $msgtopo->Obs;?> </p>								
						</li>
                          <?php endforeach; ?> 
                        
				  </ul>
					<div class="clearfix"></div>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				
			</div>
		</div>	
	</div>	
	<!--//banner--> 

<!--reservation-->
	<div class="reservation">
		<div class="container">
			<h3 class="title w3agile wow fadeInDown animated" data-wow-delay=".5s"><?php echo $EndEmil;?> </h3>
			<div class="book-info">
            <center>
			   <div class="col-md-25 gallery-grids gallery-two wthree">
					<a class="w3 wow zoomIn animated" data-wow-delay=".9s" href="public/imagelogo/<?php echo $logorecibo;?>" data-lightbox="example-set" data-title="<?php echo $detalhes;?>">
						<img src="public/imagelogo/<?php echo $logorecibo;?>" class="img-responsive zoom-img" alt=""/>
						<div class="b-wrapper">
							<h5> </h5>
						</div>
					</a>
				</div>
                <script src="js/lightbox-plus-jquery.min.js"> </script>
        <p></p>
        <p></p>
         <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
         
       <div class="fb-share-button" data-href="http://www.restaurantetipocaseiro.com.br/public/imagelogo/<?php echo $logorecibo;?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="http://www.restaurantetipocaseiro.com.br/public/imagelogo/<?php echo $logorecibo;?>">Compartilhar</a></div> 
         
     </center>
     
			  <div> </div>
			</div>
		</div>
	</div>	
	<!--//reservation-->
	<!--menu-form-->
	<div class="menu-form">
		<div class="menu-info">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Destaques</h3>
			<div class="scrollbar scrollbar1">
            
            
  <?php foreach($resultado_destaque as $destaque): ?>
				<div class="menu-grids agile wow fadeInDown animated" data-wow-delay=".5s">
               
					<div class="menu-left">
						<h4><?php echo $destaque->Nome;?></h4>
						<p><?php echo $destaque->Obs;?></p>
					</div>
					<div class="menu-right">
						<h5><?php echo $destaque->Titulo;?></h5>
					</div>
					<div class="clearfix"> </div>
                    
				</div>	
		<?php endforeach; ?>
		  </div>
		</div>
	</div>	
	<!--//menu-form--> 
	<!--reservation--><!--//reservation-->