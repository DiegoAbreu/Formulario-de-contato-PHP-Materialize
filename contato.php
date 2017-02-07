<!-- Formulário de contato - 2017
Autor: Diego de Souza Abreu
Arquivo: conecta.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
<!-- Import -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
<!--icones --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Conexão --> 
<?php include("conecta.php"); ?>
    
    
<header></header>

<title>Contato</title>


<body class="black">
    <main>
    <br>
        <div class="row center-align">
            <div class="icon-block">
                <img src="img/x-logo.png" width="150" height="150">
            </div>
        </div>
  

<div class="container">
      <div class="row center">
<div class="container hoverable">       
    <div class="card horizontal">
    <div class="card-image large">
    <ul>
    <li>
    </div>
        <div class="card-stacked #fec826">
        <div class="card-action center-align"> 
        </div>
            <h4 class="black-text">Formulário de contato</h4>
            <br>
            <div class="card-content card-action left-align white black-text">
                <!-- -->
                <div id="contact">
                <form class="col s12" action="retorno.php" method="post">
                    <div class="row">
                       
                        <div class="input-field col s12">
                            <input id="icon_prefix" placeholder="Nome" name="name" type="text" class="validate black-text" value="" required>
                        </div>
                        
                        <div class="input-field col s12">
                            <input id="icon_email" placeholder="Email" name="email" type="email" class="validate black-text"value="" required>
                        </div>
                        
                        <div class="input-field col s12">
                            <input id="icon_email" placeholder="Assunto" name="subject" type="text" class="validate black-text" value="" required>
                        </div>
                        
                        <div class="input-field col s12">
                            <textarea id="icon_prefix2" placeholder="Mensagem" name="message" class="materialize-textarea black-text" class="form-control" id="message" required data-validation-required-message="Por favor, insira sua mensagem." value="" required></textarea>
                        </div>
                        
                        <br>
                        <br>
                        
                        <div class="center">
                            <button class="btn waves-effect waves-light black" type="submit">Enviar
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                        
                    </div>
                    </form>    
                </div>
            </div>
            
<div class="card-action center-align">
&nbsp;&nbsp;&nbsp;<a id="logo-container" class="brand-logo"> <img src="img/x-logo.png" width="30" height="30" alt="logo center-align" ></a>
</div>
      
</div>
</div>
</div>
</div>
</div>

</main>
</body>
    

    <footer class="page-footer amber accent-3 center-align z-depth-5">
         <div class="container">
            <div class="row">
              <div class="col l12 s12">
                  
        <a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x  black-text" ></i></a>
                  
         &nbsp; &nbsp; &nbsp;      
                  
        <a href="#"><i class="fa fa-twitter fa-2x  black-text"></i></a>
                  
         &nbsp; &nbsp; &nbsp;
                  
        <a href="#"><i class="fa fa-instagram fa-2x  black-text"></i></a>
                  
        &nbsp; &nbsp; &nbsp;
                  
        <a href="mailto:#"><i class="fa fa-envelope-square fa-2x  black-text"></i></a>    
        
              </div>
            </div>
          </div>
        
        <div class="footer-copyright amber accent-3">
            
        <div class="container black-text ">
          <h6 class="black-text">©2017 Xavier's School for Gifted Youngsters</h6>  

    </footer>
            
<!-- Import rodape -->          
<script src="js/init.js"></script>
 <script src="js/contact_me.js"></script>