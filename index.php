<?php
include('conectaphp.php');
include('main.php');


		$page = (isset($_GET['page']))? $_GET['page'] : 'home';

		switch ($page) {

			case ('home') : require_once("home.php"); break;

			case ('cardapio') : require_once("cardapio.php"); break;

			case ('galeria') : require_once("galeria.php"); break;

			case ('outros') : require_once("outros.php"); break;

			case ('contato') : require_once("contato.php"); break;
			
			case ('envia-contato') : require_once("grava_contato.class.php"); break; 
			

				default: { require_once('home.php'); break; }	

		}

include('footer.php');

?>