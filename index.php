<!------ Nome: Thalita Thie I. Akayama -------->

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="container mt-4">

        <?php
        $email = "";
        $mensagemErro = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            
           if ($email === "usuario@exemplo.com") { // Email de exemplo
                header("Location: jogo.php?email=" . urlencode($email)); // Redirecionar com o email na URL
                exit();
            } else {
                $mensagemErro = "Email inválido.";
            }
        }
        ?>
        
        <?php if (!empty($mensagemErro)): ?>
            <div class="alert alert-danger"><?php echo $mensagemErro; ?></div>
        <?php endif; ?>

        <!----------- INICIO CONTEUDO DA PAGINA --------->
        <h1 class="titulo">Super Mario Bros. Adventure</h1><br>
        <img src="img/capamario.jpg" class="imagens-capa" alt="Cabeçalho do Jogo">

        <div class="fundo">
            <h3>Login</h3>
            <p>Bem vindo! Faça login para jogar.</p><br>
            
            <form method="post" action=""> <!------ FORMULARIO ------->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
        

    </div>
</body>
</html>