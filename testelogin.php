<?php

    session_start();

       if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
       {
           
           include_once('config.php');
           $email = $_POST['email'];
           $senha = $_POST['senha'];


           $sql = "SELECT * FROM Livros WHERE email = '$email' and senha= '$senha'";

           $result = $conexao-> query($sql);

           if(mysqli_num_rows($result) < 1)
           {
            header('Location: iniciologin.php');
           } 
           else
           {

            $_SESSION['email'] = $email;
            $_SESSION['email'] = $email;
            header('Location: livrolista.php');
           }
           
       }

       


?>