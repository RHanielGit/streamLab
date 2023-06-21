<?php
    if(empty($_GET["d"])){
        $text = "FILMES";
    }else{
        if($_GET["d"] == "filmes"){
            $text = "FILMES";
        }else if($_GET["d"] == "series"){
            $text = "SÉRIES";
        }else if($_GET["d"] == "em_alta"){
            $text = "EM ALTA";
        }else if($_GET["d"] == "minha_lista"){
            $text = "MINHA LISTA";
        }else{
            
        }
    }
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
  
  <section>
      <div class="banner-category">
          <div class="container"><?= $text ?></div>
      </div>
      <div class="container">
        <div class="row">
            <!-- Drama -->
            <div class="col-12 title-cards mt-4">Drama</div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/A-Baleia-01.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/Cisne.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/Interstellar.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/NadaDeNovo.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/Parasita.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Drama/SonhoDeLiberdade.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Romance -->
            <div class="col-12 title-cards mt-4">Romance</div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/1ef83477532e4b56b4d0fb912bcff498.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/BeloDesastre.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/Cinquenta.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/Crepusculo.jpeg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/PequenaSereia.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/Titanic.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Romance/unnamed.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Terror -->
            <div class="col-12 title-cards mt-4">Terror</div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/catchplay-63ef107e04dff029144bc7d3.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/EvilDeadRise.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/HauntedMansion.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/Hereditario.webp" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/ncW6Qsej2E2Rj6kJwJbbhbvGnwe.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/p9lmqoztqom-1.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12 cards">
                            <img src="img/filmes/Terror/Panico.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

</body>

</html>