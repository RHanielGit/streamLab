<?php
    $conn = new mysqli("localhost", "betal247_streamlabu", "fMavZiDMJf{b", "betal247_streamlab");
    
    $sql = "SELECT * FROM `conteudos`";
            
    $result = $conn->query($sql);
            
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $aux .= '<div class="swiper-slide">
                    <div class="col-12 cards">
                        <a href="https://api.polimetal.com.br/projeto/streamlab/conteudo.php?id='.$row["filme"].'"><img src="'.$x.$row["link_thumbnail"].$x.'" class="card-img-top" alt="..."></a>
                    </div>
                </div>';
        }
    } else {
        $aux = "Nenhum filme encontrado!";
    }
    $conn->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StreamLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
  <? require_once("utils/header.php") ?>

  <!-- Banner -->
  
  <section class="banner" style="max-width: 100%; color: white;">
    <div class="container" style="padding: 100px 10px;">
      <div class="row">
        <div class="col-12">
          <div class="title">TOP GUN: MAVERICK</div>
        </div>
        <div class="col-6">
          <div class="resume">8,3 • 12 • 2h 10min • 2022</div>
          <div class="description">Após mais de trinta anos de serviço como um dos melhores aviadores da Marinha, Pete Mitchell está onde
            pertence, ultrapassando os limites como um piloto de teste intrépido e evitando a promoção de posto que o
            manteria em terra.</div>
        </div>
        <div class="col-12" style="padding-top: 30px;">
          <div>
            <button type="button" class="btn btn-assitir me-2"><i class="fas fa-play me-2"></i>Assistir</button>
            <a href="conteudo.php"><button type="button" class="btn btn-info"><i class="fas fa-info me-2"></i>Mais informações</i></button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- /Banner -->
  
  <section class="container">
    <div class="row">
      <div class="col-12 title-cards">Categoria</div>
      <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?= $aux ?>
        </div>
    </div>
  </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        freeMode: true,
    });

  </script>
  
</body>

</html>