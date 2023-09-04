<!DOCTYPE html>
<html>
<head>
    <title>Jogo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="container mt-5">

        <h1 class="titulo">Super Mario Bros. Adventure</h1><br>
        <?php
            if (isset($_GET['escolha'])) { // IMAGEM DE CAPA
                $personagem = $_GET['escolha'];
                switch ($personagem) {
                    case 'heroi':
                        echo '<img src="img/capa-heroi.jpg" class="imagens-capa" alt="Cabeçalho do Jogo">'; 
                        break;
                    case 'vilao':
                        echo '<img src="img/capa-vilao.jpg" class="imagens-capa" alt="Cabeçalho do Jogo">';
                        break;
                }
            }
        ?>
        <div class="fundo">
                
            <?php
            if (isset($_GET['escolha'])) { // CONTEUDO DA PAGINA
                $personagem = $_GET['escolha'];
                if ($personagem == 'heroi') {
                    echo "<h2>Personagem selecionado: HERÓI</h2><br>";
                    echo "<p class='alert alert-success'>Você é o herói e deve salvar o dia!</p>";
                    echo '<div id="img-centralizada"><img src="img/heroi-poder.png" class="imagemp" alt="Personagem"></div>';
                    $historia = file_get_contents("heroi.txt");
                } elseif ($personagem == 'vilao') {
                    echo "<h2>Personagem selecionado: VILÃO</h2><br>";
                    echo "<p class='alert alert-danger'>Você é o vilão e seu objetivo é conquistar o mundo!</p>";
                    echo '<div id="img-centralizada"><img src="img/vilao-poder.png" class="imagemp" alt="Personagem"></div>';
                    $historia = file_get_contents("vilao.txt");
                } else {
                    echo "<p class='alert alert-warning'>Personagem não reconhecido.</p>";
                }
                echo "<p>$historia</p>";
                } else {
                    echo "<p class='alert alert-info'>Escolha um personagem para começar o jogo.</p>";
                }
            ?>
            <br><br>
            <a href="index.php" class="btn btn-primary">Sair</a>

        </div>

    </div>
</body>
</html>