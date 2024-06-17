<?php 
   // VALIDA SE USUARIO ESTA AUTENTICADO PARA ACESSAR AS PAGINAS
   session_start();

   if(!isset($_SESSION['autenticado']) or $_SESSION['autenticado'] != 'SIM'){   
       header('Location: index.php?login=erro2');
   }
?>