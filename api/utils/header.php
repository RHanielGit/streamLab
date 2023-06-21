<?
    $d = "'";
    echo '<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 10px 50px; background-color: #0D0A15;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="index.php">STREAM<span>LAB</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active ms-5 me-4 menu-button" aria-current="page" href="https://app.antidote.com.br/projeto/" style="">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4 menu-button" href="https://app.antidote.com.br/projeto/categoria.php?d=filmes">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4 menu-button" href="https://app.antidote.com.br/projeto/categoria.php?d=series">Séries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-4 menu-button" href="https://app.antidote.com.br/projeto/categoria.php?d=em_alta">Em
              alta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-button" href="https://app.antidote.com.br/projeto/categoria.php?d=minha_lista">Minha lista</a>
          </li>
        </ul>
        <form class="d-flex">
          <i class="fas fa-search" onclick="window.location='.$d.'https://app.antidote.com.br/projeto/pesquisar.php'.$d.'"></i>
        </form>
      </div>
    </div>
  </nav>';
?>