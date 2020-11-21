<?php   
require_once "../db/config.php";
//require 'header.php';
      $total =0;
          $sql ="SELECT COUNT(*) as c FROM filiado";
          $sql = $pdo->query($sql);
          $sql = $sql->fetch();
          $total = $sql['c'];     
?>
<br><br><br> 


<div class="container">
  <div class="row">
      <div class="d-flex justify-content-center  mb-3">
        <div class="p-2 bd-highlight">
          <a href="../view/tela_pesquisa_filiado.php" title="Pesquisa Individual">
            <img class="img-fluid"src="../imagens/diversas_imagens/pesqisar.jpg" width="200" height="150"style="margin:10px;"></a>
          </div>
      </div>
    </div>

    




           <div class="p-2 bd-highlight"></div>
        </div>
  </div><!-- Linha 1 -->    
</div><!-- fim do Conteiner_principal -->

