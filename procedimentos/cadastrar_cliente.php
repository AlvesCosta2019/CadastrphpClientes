<?php 

session_start();


if ( !isset($_SESSION['email']) and !isset($_SESSION['email']) ) {
  //Destrói
  session_destroy();

  //Limpa
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  
  //Redireciona para a página de autenticação
  header('location:../login.php');
}


require '../db/config.php';


$nome=$_POST['nome']; 
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$documento=$_POST['documento'];
$nome_fantasia=$_POST['nome_fantasia'];




$sql = "SELECT * FROM cliente WHERE nome ='$nome' ";
$sql = $pdo->query($sql);

if ($sql->rowCount() >= 1){


echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://codigoquatro.com.br/cadastro_cliente/tela_cad_cliente.php'>
				<script type=\"text/javascript\">
					alert(\"Registro já cadastrado!.\");
				</script>
			";	
}else{						
$data		= date('Y-m-d');

$sql = "INSERT INTO cliente SET nome='$nome',email='$email',telefone='$telefone',documento='$documento',nome_fantasia='$nome_fantasia',dataCadastro='$data'";
 $sql = $pdo->query($sql);

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body> 
<?php
		if ($sql->rowCount() >0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://codigoquatro.com.br/cadastro_cliente/tela_cad_cliente.php'>
				<script type=\"text/javascript\">
					alert(\Cliente cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://codigoquatro.com.br/cadastro_cliente/tela_cad_cliente.php'>
				<script type=\"text/javascript\">
					alert(\"Cliente não foi cadastrado !!.\");
				</script>
			";		   

			}
}
		?>
		
	</body>
</html>




