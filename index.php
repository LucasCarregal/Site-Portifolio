<?php require 'app.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projetos de Programação</title>
  <!-- Importar Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/c8d3246dbe.js" crossorigin="anonymous"></script>

</head>
<body>

  <header class="p-3 bg-dark text-white">
    <div class="container">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="h3">Dev Lucas Carregal</h1>
                <div class=" navbar justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a href="https://github.com/LucasCarregal" target="_blank" class="text-light text-decoration-none"><i style="font-size: 25px;" class="fa-brands fa-github me-3"></i></a>
                        </li>
                        <li class="nav-item">
                          <a href="https://www.linkedin.com/in/lucascarregal/" target="_blank" class="text-light text-decoration-none"><i style="font-size: 25px;" class="fa-brands fa-linkedin me-3"></i></a>
                        </li>
                        <li>
                          <a href="https://wa.me/5531987444360?text=Oi+Lucas%2C+estava+vendo+seu+portf%C3%B3lio+e+achei+(me+conte+o+que+achou)" target="_blank"  class="text-light text-decoration-none"><i style="font-size: 25px;" class="fa-brands fa-whatsapp me-3"></i></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

    <div class="container-fluid bg-dark text-white">
        <div class="row py-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-1">Portfólio</h2>
                <p class="lead mb-0">Confira alguns dos projetos que criei durante meu aprendizado!</p>
            </div>
        </div>
    </div>

  <div class="container mt-5">
    <h1 class="text-center mb-5">Projetos de Programação</h1>
    <div class="row">

    <?php foreach($lista_cards as $card){ ?>

      <!-- Card -->
      <div class="col-lg-6 col-md-12 mb-4 px-5">
        <div class="card h-100">
          <img src="<?= $card->ref_img_1 ?>" class="card-img-top" alt="Projeto 3" onmouseover="this.src= '<?= $card->ref_img_2 ?>'" onmouseout="this.src='<?= $card->ref_img_1 ?>'">
          <div class="card-body">
            <h5 class="card-title"><?= $card->titulo ?></h5>
            <p class="card-text"><?= substr($card->descricao, 0, 130).'...' ?></p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?='card_'.$card->id ?>">Mais Infos</button>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="<?='card_'.$card->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $card->titulo ?></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p class="card-text" ><?= $card->descricao ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Ver repositório<i class="fa-brands fa-github ms-2"></i></button>
              <a href="<?= $card->diretorio ?>" type="button" class="btn btn-outline-primary">Executar aplicação<i class="fa-solid fa-code ms-2"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>

  <footer class="bg-dark text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase text-light">Sobre Mim</h5>
          <p class="text-light">
            Desde pequeno sempre fui apaixonado por tecnologia e sempre quis criar meus próprios apps. Agora quero seguir carreira nessa area e viver fazendo o que amo, <strong>programar</strong>!
          </p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white">Contato</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://wa.me/5531987444360?text=Oi+Lucas%2C+estava+vendo+seu+portf%C3%B3lio+e+achei+(me+conte+o+que+achou)" target="_blank" class="text-light text-decoration-none"><i class="fa-brands fa-whatsapp me-3"></i>31 98744-4360</a> 
            </li>
            <li>
              <a href="mailto:lucascarregal123@gmail.com?subject=Portif%C3%B3lio" target="_blank" class="text-light text-decoration-none"><i class="fa-solid fa-envelope me-3"></i>lucascarregal123@gmail.com</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-white">Redes Sociais</h5>
          <ul class="list-unstyled mb-0">
            <li class="nav-item">
              <a href="https://github.com/LucasCarregal" target="_blank" class="text-light text-decoration-none"><i class="fa-brands fa-github me-3"></i>GitHub</a>
            </li>
            <li class="nav-item">
              <a href="https://www.linkedin.com/in/lucascarregal/" target="_blank" class="text-light text-decoration-none"><i class="fa-brands fa-linkedin me-3"></i>linkedin</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center pb-3 bg-dark text-light">
      © 2023 Lucas Carregal - Todos os direitos reservados.
    </div>
  </footer>

  <!-- Importar Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
