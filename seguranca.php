<?php
require 'db/config.php';

if (isset($_POST['email']) && empty($_POST['email']) == false) {
	# code...
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));
	
}
 	
 	 $sql = $pdo->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");
 	 if ($sql->rowCount() > 0) {
 	 	# code...
 	 	$dado = $sql->fetch();
        
 	 	session_start();
 	 	session_regenerate_id(); 
              $_SESSION['email'] = $dado['email'];
              $_SESSION['senha'] = $dado['senha'];
                 # code...
          	header('Location:view/tela_pesquisa_cliente.php');
	            

        }else{
             session_destroy();

				//Limpa
				unset ($_SESSION['email']);
				unset ($_SESSION['senha']);

				//Redireciona para a página de autenticação
				header('Location:https://codigoquatro.com.br/cadastro_cliente/login.php'); 

        }
 	 	
 	 
 	
	

?>	