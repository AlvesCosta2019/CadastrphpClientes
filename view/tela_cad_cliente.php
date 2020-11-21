<?php 
  
  require '../db/config.php';
  //require_once'header.php';
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel='stylesheet' href='../css/tela_cadastro.css'>
  <title>Cadastro</title>
</head>
<body>

<div class="container">

      <div class="row">
      <div class="col-sm-5">
                       <img id="img_cadastro" src="../imagem/cadastro_cliente.jpg" alt="cadastro">
         </div> 
        <div class="col-sm-5">
                       <p class="texto_cabecalho">Cadastrar Novo Cliente</p>
         </div>               
      </div>                      
                        <hr style="border:1px solid #008000;">
      <div class="row"> 
        <div class="col-sm-12"> 
                        <a class="texto_cabecalho1" href="../view/tela_pesquisa_cliente.php">Listar Clientes</a>
        </div>
        <br>                
      </div> 

      <div class="row"> 
          <div class="formulario">
                  <form action="../procedimentos/cadastrar_cliente.php"  method="POST">
                  
                              <div class="form-group col-sm-12">
                                                  <label for="nome" id="label_cor">Nome</label>			      
                                    <input type="text" class="form-control"  name="nome"  onkeyup="maiuscula(this)" >
                              </div>
                              <div class="form-group col-sm-12">
                                                  <label for="nome" id="label_cor">Email</label>			      
                                    <input type="text" class="form-control"  name="email"  onkeyup="maiuscula(this)" >
                              </div>
                               <div class="form-group col-sm-12">
                                                  <label for="nome" id="label_cor">Telefone</label>			      
                                    <input type="text" class="form-control"  name="telefone"  onkeyup="maiuscula(this)" >
                              </div>
                              <div class="form-group col-sm-12">
                                                  <label for="nome" id="label_cor">Documento</label>			      
                                    <input type="text" class="form-control"  name="documento"  onkeyup="maiuscula(this)" >
                              </div>
                              <div class="form-group col-sm-12">
                                                  <label for="nome" id="label_cor">Empresa</label>			      
                                    <input type="text" class="form-control"  name="nome_fantasia"  onkeyup="maiuscula(this)" >
                              </div>
                              <div class="form-group col-sm-12">  
                                               <button id="registro" type="submit" name="button"class="btn btn-secondary">Gravar</button>
                              </div>                   
                  </form> 
          </div>  
      </div>
</div><!-- fim do Conteiner_principal --> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>





<script type="text/javascript">
        // INICIO FUNÇÃO DE MASCARA MAIUSCULA
        function maiuscula(z){
                v = z.value.toUpperCase();
                z.value = v;
            }
        //FIM DA FUNÇÃO MASCARA MAIUSCULA
        </script>
<script>

  $(document).ready(function(){
    $('#registro').click(function(){

      vazios=validarFormVazio('frmRegistro');

      if(vazios > 0){
        alert("Preencha os Campos!!");
        return false;
      }

      

</script>


