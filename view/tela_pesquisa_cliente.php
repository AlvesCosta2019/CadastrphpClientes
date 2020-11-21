<?php
      session_start();
      require_once "../db/config.php";
      if ( !isset($_SESSION['email']) and !isset($_SESSION['email']) ) {  
        //Limpa
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        
        //Redireciona para a página de autenticação
        //header('location:../login.php');  
        
     
      $sql = "SELECT * FROM filiado  LIMIT 0";
      $sql = $pdo->query($sql);
      }	 
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/pesquisar_cliete.css'>
   
   <title>Cadastro de Clientes</title>
  </head>
  <body> 

  <div class="container">  
      <div class="row">   
          <div class="titulo_logo"><h4>Consulta Clientes</h4></div>
     </div>
      <br>
      <br>
      <hr>
      <div class="btNovoCliente"><a href="../view/tela_cad_cliente.php"><img id="img_novo_clente" src="../imagem/ad_cliente2.png"></a></div>
      <div class="buscar_carteira">
            <form id="form_buscar_carteira" action="../view/tela_resultado_pesquisa_cliente.php" method="get">
               <input name="consulta" id="txt_consulta" placeholder="Nome do cliente" type="text" class="form-control"><br>
               <button id="buscar_carteira" type="submit" class="form-group btn btn-primary">Pesquisar</button>
            </form>
      </div>
  </div>    




	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div><!-- fim do Conteiner_principal -->

