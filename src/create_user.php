<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Dispositivos VTV- Cadastro Usuários</title>
        <link rel="stylesheet" href="./css/create_user.css">
    </head>
    <body>
        <header>
            <image class="header-image_hero" src="./imgs/SILVINHO ICON.png">
        </header>
    <section class="section-formulario">
        <form action="./includes/create_user_db.php" class="section-formulario_form" method="POST">
            <div class="input-container">
                <div class="input-row">
                    <label for="input-row-username">Nome de usuário</label>
                    <input required class="input-row-field" id="input-row-username" name="input-row-username" type="text" placeholder="Nome de Usuario">
                </div>
                <div class="input-row">
                    <label for="input-row-senha">Senha do usuário</label>
                    <input required class="input-row-field" id="input-row-senha" name="input-row-senha" type="password" placeholder="Senha_Forte1@#">
                </div>
                <div class="input-row">
                    <label for="input-row-email">Endereço de Email</label>
                    <input required class="input-row-field" id="input-row-email" name="input-row-email" type="text" placeholder="seuEmail@dominio.com.br">
                </div>
                <button class="input-container-button">Criar</button>
            </div>
            
        </form>
    </section>
    </body>
</html