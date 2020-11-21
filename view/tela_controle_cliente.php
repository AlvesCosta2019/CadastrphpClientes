<?php   
      require_once "../db/config.php";
      $sql = "SELECT * FROM cliente  LIMIT 0";
      $sql = $pdo->query($sql);  
?>


<div class="container"> 
<h1>Listar Filiados</h1>
<hr style="border:1px solid #008000;">

  <div class="form-group input-group">
  <form class="form-group "action="../view/tela_resultado_pesquisa_cliente.php" method="get">
  <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control"><br>
  <button type="submit" class="form-group btn btn-primary">Pesquisar</button>
  </form>
  </div>
      
<style>
  th,td
  {
    width:30% ;text-align:center;

  }
</style>  


<div class="row">
<div class="col-md-12">
  <div style="overflow: auto; width:100%; height: 500px; border:solid 1px">
       <table id="tabela" class="table table-hover" style="width:100% ">
  <thead class="thead-dark">
    <tr>
      <th>Edit</th>
      <th>Card</th>    
      <th>Matricula</th>
      <th>Nome</th>
      <th>Função</th>
      <th>Congregação</th>
      <th>Documento</th>
      <th>Nascimento</th>
      <th>Batismo</th>
      <th>Estado Civil</th>
      <th>Mãe</th>
      <th>Pai</th>      
      <th>Cadastrado em:</th>
      <th>Foto</th>
      <th>Ação</th>
    </tr>
  </thead>
  <?php 
  
  if($sql->rowCount() > 0) {
      foreach($sql->fetchAll() as $linhas){   
  ?>
  <tbody>
    <tr>
      <td><a href="../view/tela_alterar_filiado.php?&matricula=<?php echo $linhas['matricula']; ?>">Alterar</a></td>
      <td><a href="../view/tela_imprimir_carteira.php?&matricula=<?php echo $linhas['matricula']; ?>">Carteira</td>
     
      <td><?php echo $linhas['matricula'];?></td>
      <td><?php echo $linhas['nome'];?></td>
      <td><?php echo $linhas['funcao'];?></td>      
      <td><?php echo $linhas['congregacao'];?></td>
      <td><?php echo $linhas['documento'];?></td>
      <td><?php echo date("d/m/Y",strtotime($linhas['dataNascimento']));?></td>
      <td><?php echo date("d/m/Y",strtotime($linhas['dataBatismo']));?></td>
      <td><?php echo $linhas['estadoCivil'];?></td>      
      <td><?php echo $linhas['mae'];?></td>
      <td><?php echo $linhas['pai'];?></td>        
      <td><?php echo date("d/m/Y",strtotime($linhas['datCadastro']));?></td>
      <td><img src="../imagens/<?php echo $linhas['arquivo'];?>" width="100" height="100"></td>
      <td><a href="../procedimentos/excluir_filiado.php?&matricula=<?php echo $linhas['matricula']; ?>">Excluir</a></td>
    
    </tr>
   
  </tbody>
  <?php 
       }
      } 
    ?>
</table>
</div>      
</div>

</div><!-- Linha 1 -->  
<script>
$('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>

</div><!-- fim do Conteiner_principal -->

<?php require'footer.php';?>

 