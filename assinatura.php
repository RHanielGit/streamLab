<?php
    
    $email = $_GET["email"];

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
  <style>
      .text-plan-1{
          font-family: "Montserrat", sans-serif;
          font-size: 26px;
          font-weight: 600;

          color: #fff;
      }
      .text-plan-2{
          font-family: "Montserrat", sans-serif;
          font-size: 20px;
          font-weight: 600;
          color: #8f00ff;
      }
      .text-plan-3{
          font-family: "Montserrat", sans-serif;
          font-size: 18px;
          font-weight: 600;
          color: #8f00ff;
      }
      .text-plan-4{
          font-family: "Montserrat", sans-serif;
          font-size: 16px;
          font-weight: 400;
          color: #fff;
      }
      .text-plan-5{
          font-family: "Montserrat", sans-serif;
          font-size: 15px;
          font-weight: 400;
          color: #FFF;
      }
      .text-plan-5 i{
          color: #8f00ff;
          margin-right: 10px;
      }
      .text-plan-title{
          font-family: "Montserrat", sans-serif;
          font-size: 22px;
          font-weight: 500;
          color: #FFF;
      }
      
  </style>
</head>

<body>
    <section class="login">
        <div class="container">
            <div class="row text-center pt-5">
                <div class="col-6 offset-3 logo-streamlab mb-3">
                    STREAM<span>LAB</span>
                </div>
                <div class="col-8 offset-2 text-start mb-2 mt-2">
                    <div class="text-plan-title">Escolha um plano:</div>
                </div>
                <div class="col-8 offset-2">
                    <div class="row text-start">
                        <div class="col-6 p-5" style="background-color: rgba(3, 2, 7, 0.8);">
                            <div class="text-plan-1">
                                Plano Básico
                            </div>
                            <div class="mt-3 text-plan-2">
                                Grátis
                            </div>
                            <div class=" text-plan-3">
                                Iniciante
                            </div>
                            <div class="mt-3 text-plan-4">
                                Plano inciante com anúncios
                            </div>
                            <div class="mt-3 text-plan-5">
                                <div><i class="fas fa-check"></i>Anúncios em cada conteúdo</div>
                                <div><i class="fas fa-check"></i>Brazino 777</div>
                                <div><i class="fas fa-check"></i>Apenas 1 Tela</div>
                            </div>
                            <button type="button" class="btn btn-login mt-5" id="plan-free">Escolher</button>
                            
                        </div>
                        <div class="col-6 p-5" style="background-color: #231d4f">
                            <div class="text-plan-1">
                                Plano Labs
                            </div>
                            <div class="mt-3 text-plan-2">
                                R$ 10,90
                            </div>
                            <div class=" text-plan-3">
                                Preemium
                            </div>
                            <div class="mt-3 text-plan-4">
                                Plano preemium sem anúncios
                            </div>
                            <div class="mt-3 text-plan-5">
                                <div><i class="fas fa-check"></i>Sem anúncios em cada conteúdo</div>
                                <div><i class="fas fa-check"></i>Sem Brazino 777</div>
                                <div><i class="fas fa-check"></i>Telas infinitas</div>
                            </div>
                            <button type="button" class="btn btn-login mt-5" id="plan-labs">Escolher</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
   
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <script src="js/script.js"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>


  <script>
    document.getElementById("plan-labs").addEventListener("click", () => {
        $.get("api/filmes.php", {rota: "addPlan", email: "<?= $email ?>", plano: "labs"}, (res) => {
            if(res == "1"){
                window.location.href="https://api.polimetal.com.br/projeto/streamlab/usuarios.php";
            }else{
                alert(res)
            }
        });
    });
    
    document.getElementById("plan-free").addEventListener("click", () => {
        $.get("api/filmes.php", {rota: "addPlan", email: "<?= $email ?>" , plano: "free"}, (res) => {
            if(res == "1"){
                window.location.href="https://api.polimetal.com.br/projeto/streamlab/usuarios.php";
            }else{
                alert(res)
            }
        });
    });
  </script>
  
</body>

</html>