<!-- Formulário de contato  - 2017
Autor: Diego de Souza Abreu
Arquivo: conecta.php -->

<!-- *conecta* -->

<?php

if(isset($_POST['email'])) {

    $email_to = "seuemail@email.com";
 
    $email_subject = "Contato";

 
    function died($error) {
 
        // your error code can go here
 
        echo "Nós lamentamos. Alguns erros foram encontrados no formulário enviado.";
 
        echo "Os erros encontrados estão abaixo.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Por favor, corrija os erros e tente novamente.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
 
        died('Desculpe, não foi possível enviar sua mensagem. Tente novamente mais tarde.');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
 
    $email_message = "Detalhes do contato abaixo.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
    
    $email_message .= "subject: ".clean_string($subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

 
	// create email headers
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers);  


?>
 
<?php
 
}
 
?>

<!-- fim do código conecta -->