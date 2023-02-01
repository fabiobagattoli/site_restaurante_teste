<?php include('conect_dbs.php'); ?>
<?php include('header.php'); ?>
<?php include('main.php'); ?>
<?php 

		$acao = (isset($_GET['acao']))? $_GET['acao'] : 'home';
		switch ($acao) {
			case ('home') : include("view/administrativo/empresa/update.php");break;
			case ('empresa') : include("view/administrativo/empresa/update.php"); break;
			case ('logo-empresa') : include("view/administrativo/empresa/upload_image.php"); break;
			case ('del-logo-empresa') : include("view/administrativo/empresa/scriptlogo/excluir_logo.php");break;
					
			//Mensagens topo do site
			case ('principal') : include("view/administrativo/home/index.php"); break;
			case ('novo-principal') : include("view/administrativo/home/new.php"); break;
			case ('alterar-principal') : include("view/administrativo/home/update.php"); break;
			case ('deletar-principal') : include("view/administrativo/home/delete.php"); break;
			
			//Destaques - home
			case ('destaque') : include("view/administrativo/destaque/index.php"); break; 
			case ('novo-destaque') : include("view/administrativo/destaque/new.php"); break;
			case ('alterar-destaque') : include("view/administrativo/destaque/update.php"); break;
			case ('deletar-destaque') : include("view/administrativo/destaque/delete.php"); break;
			
			//Galeria de fotos
			case ('galeria') : include("view/administrativo/galeria/index.php"); break;
			case ('novo-galeria') : include("view/administrativo/galeria/new.php"); break;
			case ('alterar-galeria') : include("view/administrativo/galeria/update.php"); break;
			case ('deletar-galeria') : include("view/administrativo/galeria/delete.php"); break;
			case ('foto-galeria') : include("view/administrativo/galeria/upload_image.php"); break;
			case ('deletar-foto-galeria') : include("view/administrativo/galeria/scriptlogo/excluir_logo.php"); break;
			
				default: { require_once('view/index.php'); break; }	
		}
 	?>
<?php include('footer.php'); ?>