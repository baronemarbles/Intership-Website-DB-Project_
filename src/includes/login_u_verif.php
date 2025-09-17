<?php 
session_start();  
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    
    
    
    try{
        require "dbh.inc.php";
        $query="SELECT id, username, pw from users where username = :username";
        $stmt= $pdo->prepare($query);
        $stmt->bindParam(":username",$usuario);
        $stmt->execute();
        $user= $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt=null;
        if($user&&password_verify($senha,$user["pw"])){
             
             $_SESSION['user_id']=$user['id'];
             $_SESSION['username']=$user['username'];
             $stmt=null;
            header('Location:../index.php');
            die();
            
        } else{
            //$stmt=null;
            $_SESSION['login_error'] =401;
            header('Location:../login_u.php');
            die();
        }

        

    } catch(PDOException $e){
            echo "Erro: ".$e;
    }

}