<!DOCTYPE html>
<html lang="PT-BR">
<head>
<title>Restaurante Tipo Caseiro</title>

<!-- You can use Open Graph tags to customize link previews. 
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	<meta property="og:url"           content="http://www.restaurantetipocaseiro.com.br/index.php?acao=home" />
	<meta property="og:type"          content="Restaurante Tipo Caseiro" />
	<meta property="og:title"         content="Restaurante Tipo Caseiro" />
	<meta property="og:description"   content="" />
	<meta property="og:image"         content="http://www.restaurantetipocaseiro.com.br/public/imagelogo/<?php echo $logorecibo;?>.jpg" />
	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Restaurante Tipo Caseiro" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="webresponsivo.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/lightbox.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
</head>
<body>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<!--header-->
			<div class="header">
				<div class="logo">
					<div class="" ><a href="index.php?page=home"><img src="images/restaurante.png" alt="" class="img-responsive" /></a></div>
                    

                    
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul>
						<li class="wow slideInDown animated" data-wow-delay=".5s"> <a class="<?php if($_GET['page'] == "home"){echo "active";} ?>" href="index.php?page=home">Home</a></li>
					<li class="wow slideInDown" data-wow-delay=".6s"> <a class="<?php if($_GET['page'] == "cardapio"){echo "active";} ?>" <a href="index.php?page=cardapio">Cardápio</a></li>					
						<li class="wow slideInDown" data-wow-delay=".7s"> <a class="<?php if($_GET['page'] == "galeria"){echo "active";} ?>" <a href="index.php?page=galeria">Galeria</a></li>
						<li class="wow slideInDown" data-wow-delay=".7s"> <a class="<?php if($_GET['page'] == "outros"){echo "active";} ?>" <a href="index.php?page=outros">O Restaurante</a></li>
					
						<li class="wow slideInDown" data-wow-delay=".9s"> <a class="<?php if($_GET['page'] == "contato"){echo "active";} ?>" <a href="index.php?page=contato">Contato</a></li>
					</ul>
                    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                     <h1 class="img-responsive"><a href="index.php?page=home"><img src="images/tipocaseiro.png" alt="" class="img-responsive" /></a></h1>
					<!-- script-for-menu --> 
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>	