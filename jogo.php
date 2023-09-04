<!DOCTYPE html>
<html>
<head>
    <title>Seleção de Personagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="container mt-5">

    <?php
        $email = $_GET["email"];
        if (isset($email)) {
            $address = array(
                'ed.araujo@fatec.sp.gov.br',
                'usuario@exemplo.com', 
            );
            $verificado = false;
            foreach ($address as $email_valido) {
                if ($email_valido === $email) {
                    $verificado = true;
                    break;
                }
            }

            if ($verificado) {
                ?>
                    <!------------- CONTEUDO DA PAGINA ------------->
                    <h1 class="titulo">Super Mario Bros. Adventure</h1><br>
                    <img src="img/capamario.jpg" class="imagens-capa" alt="Cabeçalho do Jogo">

                    <div class="fundo">
                    <h2>Pronto para a aventura?</h2><br>
                    <p>Escolha seu personagem:</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b><a href="personagem.php?escolha=heroi">HERÓI</a></b>
                        </li>
                        <li class="list-group-item">
                            <b><a href="personagem.php?escolha=vilao">VILÃO</a></b>
                        </li>
                    </ul>
                    <br><br>
                    <a href="index.php" class="btn btn-primary">Sair</a>
                        
                    </div>
                    
                <?php
            } else {
                echo "<p>E-mail inválido.</p>";
            }
        } else {
            echo "<p>Email não fornecido.</p>";
        }
    ?>

    </div>
</body>
</html>