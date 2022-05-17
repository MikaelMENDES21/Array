<?php 
  $nome= $_POST['nome'];
  $senha= $_POST['senha'];

  if($nome == "administrador" && $senha == "123"){
      header("location: restrito.php");
  } 
  
  else{
           header ("location: botao.html");
      }

?>