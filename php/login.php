<?php
    require("../banco/conecta.php");
    session_start();
    $senha =  MD5(strval ($_POST['senha']));
    $login = $_POST['usuario'];
    
    $query = "SELECT * FROM tb_admin WHERE nm_admin ='$login' AND ds_senha = '$senha'";
    $result = mysqli_query($conexao, $query);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['acesso'] = $login;
        header('location:../inicio.php');
    }else{
         header('location:../index.php');
    }
    