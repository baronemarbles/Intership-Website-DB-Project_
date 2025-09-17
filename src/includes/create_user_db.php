<?php
require_once "./dbh.inc.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    try{
    $userName= $_POST["input-row-username"];
    $userPassword= password_hash($_POST["input-row-senha"],PASSWORD_BCRYPT);
    $userEmail= $_POST["input-row-email"];
    
    $query= "INSERT INTO users(username,pw,email) VALUES(:username,:userpassword,:useremail)";

    $stmt= $pdo->prepare($query);

    $stmt->bindParam(":username",$userName);
    $stmt->bindParam(":userpassword",$userPassword);
    $stmt->bindParam(":useremail",$userEmail);

    if($stmt->execute()){
        echo("<script>alert('Usuario Adicionado!')</script");
        header("Location:../create_user.php");
    }


    $stmt=null;
    $pdo=null;
    die();
        
    } catch(PDOException $e){
        echo($e);
        header("Location:../create_user.php");
    }
    

}

?>