<?php   
      require_once "../db/config.php";
       $consulta = $_GET['consulta'];
       $sql    = "SELECT * FROM cliente WHERE nome LIKE '$consulta%'";
       $sql    = $pdo->query($sql);
?>
       
 
<?php if($sql->rowCount() > 0): ?>
<?php foreach($sql->fetchAll() as $linhas){
?>

  
  <!Doctype html>
  <html lang='pt-br'>
                  <head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="pesquisar_cliete.css">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                    <title>Carteira Digital</title>
                  </head>
  <body>

               
                   
                          <div id="tabela" >
                                  <table class="table table-hover">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th style='text-align:center;vertical-align:middle'>Codigo</th>
                                          <th style='text-align:center;vertical-align:middle'>Nome</th>
                                          <th style='text-align:center;vertical-align:middle'>E-mail</th>
                                          <th style='text-align:center;vertical-align:middle'>Telefone</th>
                                          <th style='text-align:center;vertical-align:middle'>CPF/CNPJ</th>
                                          <th style='text-align:center;vertical-align:middle'>Empresa</th>
                                          <th style='text-align:center;vertical-align:middle'>Dt Cadastro</th>
                                          <th style='text-align:center;vertical-align:middle'>Ações</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>                                   
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['idCliente'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['nome'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['email'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['telefone'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['documento'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['nome_fantasia'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><?php echo $linhas['dataCadastro'];?></td>
                                          <td style='text-align:center;vertical-align:middle'><button type="button" class="btn btn-primary">Pedido</button></td>
                                        </tr>                                  
                                      </tbody>
                                    </table>                         
                          </div>
                    
              

                   
                  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>                   
  </body>  
</html> 

  <?php 
    }
   ?>


<?php else: ?>

<?php endif; ?>  





 