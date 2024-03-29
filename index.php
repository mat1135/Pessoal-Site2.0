<?php
$sql = "SELECT * FROM comentarios";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilo/style.css">
    <title>Site Pessoal - Matheus</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="css/galeria.css"/>

</head>

<body class="fundo">

    <!-- Barra de Navegação -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #474546; font-family: Fonte1;" >
        <div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <img src="imagens/eune.png" alt="Matheus Felipe">
                </li>
                <li class="nav-item active">
                    <h1 class="nome">Matheus Oliveira</h1>
                </li>
                    <p class="frase">"A vida passa rápido demais, se não parar pra olhar em volta as vezes vai perde-la"</p>
                </li>     
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000; font-family: 'Fonte2'; padding-bottom: 15px;" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active" >
              <a class="nav-link" href="index.html">Home<span class="sr-only" >(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pessoal.html">Pessoal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recados.html">Recados</a>
            </li>
        </ul>
        
        <div class="direita">
          <a href="https://www.facebook.com/matheus.barroso.562/" target="_blank"><img id="rede1" class="img-fluid" src="imagens/face.png" alt="instagran"></a>
          <a href="https://www.instagram.com/matth.oliv/" target="_blank"><img id="rede1" class="img-fluid" src="imagens/instagram_logo.png" alt="instagran"></a>
          <a href="https://twitter.com/mats_oliv" target="_blank"><img id="rede2" class="img-fluid" src="imagens/twitter-logo-4.png" alt="twitter"></a>
          </div>
        </div>
      </nav>


    <!-- Folha -->

    <div class="container">
        <div class="pagina">
        <h2 class="indexh2">Momentos</h2>
          <div class="row">               
            <div class="col-md-3">
              <figure class="img-thumbnail" style="background-color: #43393D;">
                <img class="figure-img img-fluid" src="imagens/Marciopobre.jpg" alt="">
                <figcaption class="figure-caption">
                  <h3 class="indexh3">Os cria</h3>
                  <p class="homeP"></p>
                  <a href="cria.html"><button type="button" class="btn btn-outline-info">Mais sobre</button></a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-3">
                  <figure class="img-thumbnail" style="background-color: #43393D;">
                  <img class="figure-img img-fluid" src="imagens/spacejam.jpg" alt="">
                      <figcaption class="figure-caption">
                          <h3 class="indexh3">Filmes e series</h3>
                          <p class="homeP"></p>
                          <a href="filmes.html"><button type="button" class="btn btn-outline-info">Mais sobre</button></a> 
                      </figcaption>
                  </figure>
              </div>
              <div class="col-md-3">
                <figure class="img-thumbnail" style="background-color: #43393D;">
                  <img class="figure-img img-fluid" src="imagens/peep.png" alt="">
                  <figcaption class="figure-caption">
                    <h3 class="indexh3">Musicas</h3>
                    <p class="homeP"></p>
                    <a href="musicas.html"><button type="button" class="btn btn-outline-info">Mais sobre</button></a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-3">
                <figure class="img-thumbnail" style="background-color: #43393D;">
                  <img class="figure-img img-fluid" src="imagens/xbox2.jpg" alt="">
                  <figcaption class="figure-caption">
                    <h3 class="indexh3">Jogos</h3>
                    <p class="homeP"></p>
                    <a href="jogos.html"><button type="button" class="btn btn-outline-info">Mais sobre</button></a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <hr style="color: #AB866E;">

            <h2 class="indexh2">Sobre</h2>
            <p class="indexp">Meu nome é Matheus, atualmente estou cursando o 2º do ensino medio integrado com com o técnico de desenvolvimento de sistemas. Dono de um servidor no discord chamado <a href="https://discord.gg/ZtHJyd8ePA">Tropa do Lorde</a>. Gosto de um gama de jogos, sendo os principais: Call of Duty Warzone, Valorant, GTA roleplay, Fall Guys, Rocket League. Também passo a maior parte do dia escutando músicas. Gosto muito de assistir filmes e séries. Eu acho que você NÃO!</p>

            <hr style="color: #AB866E;">

            <h2 class="indexh2">Comentarios</h2>
            <div id="main3">
                <div class="comentario">
                <?php foreach ($lista as $linha): ?>
		            	<div class="balao">
                  <h4 class="indexh3"><?php echo $linha['nome'] ?> - <?php echo $linha['turma'] ?></h4>
			          	<p class="indexp"><?php echo $linha['comentario'] ?></p>			 	
		          	</div>
               <?php endforeach ?>
                </div>
                <div class="comentario">
                    <p>Aqui entrara um comentario</p>
                    <h4>Nome do aluno</h4>
                </div>
                <div class="comentario">
                    <p>Aqui entrara um comentario</p>
                    <h4>Nome do aluno</h4>
                </div>
            </div>
            </div>
    </div>
    <!-- Rodapé -->

        <div id="footer">
            <p><i>Copyright ©2021 - by Matheus Oliveira</i><a style="margin: 20px;" href="https://github.com/mat1135"><img class="imgfooter img-fluid" src="imagens/GitHub-logo.png"></a></p>
        </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>