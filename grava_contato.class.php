<?php

date_default_timezone_set('America/Sao_Paulo');





$nome        = $_POST['nome'];

$email       = $_POST['email'];

$whats       = $_POST['whats'];

$fone        = $_POST['fone'];

$obs         = $_POST['obs'];





 



$data = date('Y-m-d H:i');





$nomeremetente     = "Contato - Site. Tipo Caseiro";



$assunto     = "Contato - Site. Tipo Caseiro";



$emailremetente    = "contato@restaurantetipocaseiro.com.br";



$emaildestinatario = "contato@restaurantetipocaseiro.com.br";

	

  $emailsender = "contato@restaurantetipocaseiro.com.br";

  



  



/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */



if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows



else $quebra_linha = "\n"; //Se "nÃ£o for Windows"



/* Montando a mensagem a ser enviada no corpo do e-mail. */

 function retornaIpReal()  

 {  

 if (!empty($_SERVER['HTTP_CLIENT_IP'])) //se possível, obtém o endereço ip da máquina do cliente  

 {  

 $ip=$_SERVER['HTTP_CLIENT_IP'];  

 }  

 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //verifica se o ip está passando pelo proxy  

 {  

 $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];  

 }  

 else  

 {  

 $ip=$_SERVER['REMOTE_ADDR'];  

 }  

 return $ip;  

 } 

 

$mensagemHTML = '<P>'.$nome.'</P>





<P>E-mail: '.$email.'</P>



<P>Fone: '.$fone.'</P>



<P>WhatsApp: '.$whats.'</P>



<P>Mensagem: '.$obs.'</P>



<P>Data: '.$data.'</P>





<P>IP: '.$_SERVER['REMOTE_ADDR'].'</P>



<p>.</p>

<p>.</p>

<p>.</p>

<p><h4><i>Esse email foi enviado pelo formulário de contato do site Restaurante Tipo Caseiro </i></h4></p>





<hr>';

 



/* Montando o cabeÃ§alho da mensagem */



$headers = "MIME-Version: 1.1" .$quebra_linha;



$headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;



// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.



$headers .= "From: " . $emailsender.$quebra_linha;



$headers .= "Reply-To: " . $emailremetente . $quebra_linha;



// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)





/* Enviando a mensagem */



//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:



if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix



    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"



    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );



}

 echo "<script>window.location = 'index.php?page=home'</script>";

?>