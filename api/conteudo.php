<?php

$id = $_GET["id"];

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
  <script src="https://kit.fontawesome.com/2eba641b80.js" crossorigin="anonymous"></script>
  
</head>

<body>
  <? require_once("utils/header.php") ?>

  <!-- Banner -->
    <div class="d-none" id="content-full">
  <section class="content-banner" style="max-width: 100%; color: white;">
    <div class="container" style="padding: 100px 10px;">
      <div class="row">
        <div class="col-12">
          <div>
            <button type="button" class="btn btn-home" onclick="window.location='https://app.antidote.com.br/projeto/';"><i class="fa-solid fa-chevron-left"></i> Home</button>
          </div>
        </div>
        <div class="col-7 mt-5">
        <div class="title"><span id="nome-include"></span></div>
          <div class="resume">IMDB <span id="avaliacao-include"></span> • <span id="classif-include"></span> • <span id="duracao-include"></span> • <span id="ano-include"></span></div>
          <div class="description"><span id="desc-include"></span></div>
          <div class="categories">Categoria: <span id="categoria-include"></span></div>
          <div class="mt-4">
            <button type="button" class="btn btn-play me-2" id="reprodutor"><i class="fas fa-play me-2"></i>Reproduzir</button>
            <button type="button" class="btn btn-list"><i class="fa-solid fa-plus"></i></button>
            <button type="button" class="btn btn-share"><i class="fa-solid fa-share-nodes"></i></button>
            <button type="button" class="btn btn-download"><i class="fa-solid fa-download"></i></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner -->
  <section class="container">
    <div class="row">
      <div class="col-12 mt-5 content-title">Saiba Mais</div>
      <div class="col-12 mt-3 content-subtitle">Diretores</div>
      <div class="col-12 content-text"><span id="diretores-include"></span></div>
      <div class="col-12 mt-3 content-subtitle">Produtores</div>
      <div class="col-12 content-text"><span id="produtores-include"></span></div>
      <div class="col-12 mt-3 content-subtitle">Atores</div>
      <div class="col-12 content-text"><span id="atores-include"></span></div>
      <div class="col-12 mt-4 content-bottom-text">Ao clicar em reproduzir você concorda com nossos Termos de uso.</div>
    </div>
  </section>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
  <script>
    window.addEventListener("load", () => {
        var content = document.getElementById("content-full");
        var contentBanner = document.getElementsByClassName("content-banner");
        var id = "<?= $id ?>";
        if(id != ""){
            $.get("api/filmes.php", {rota: "read", id: id}, (res) => {
                if(res != 404){
                    var res = JSON.parse(res);
                    console.log(res);
                    contentBanner[0].style.backgroundImage = "linear-gradient(to right,rgba(13, 10, 21, 1),rgba(13, 10, 21, 0.2)),url(" + res.link_banner + ")";
                    
                    //document.getElementById("imagem-include").innerHTML = '<img src="' + res.link_thumbnail + '" class="card-img-top" alt="...">';
                    document.getElementById("nome-include").innerHTML = res.nome;
                    document.getElementById("duracao-include").innerHTML = res.duracao;
                    document.getElementById("classif-include").innerHTML = res.classificacao_indicativa;
                    document.getElementById("desc-include").innerHTML = res.descricao;
                    document.getElementById("ano-include").innerHTML = res.ano;
                    document.getElementById("diretores-include").innerHTML = res.diretores;
                    document.getElementById("atores-include").innerHTML = res.atores_principais;
                    document.getElementById("produtores-include").value = res.produtores;
                    document.getElementById("avaliacao-include").innerHTML = res.avaliacao;
                    document.getElementById("categoria-include").innerHTML = res.categoria;
                    
                    document.getElementById("reprodutor").addEventListener("click", () => {
                        window.location.href = res.link_filme;
                    });
                    //document.getElementById("thumbnail-include").value = res.link_thumbnail;
                    //document.getElementById("banner-include").value = res.link_banner;
                    //document.getElementById("linktrailer-include").value = res.link_trailer;
                    //document.getElementById("linkfilme-include").value = res.link_filme;
                    
                    content.classList.remove("d-none");
                    content.classList.add("d-block");
                    
                }else{
                    alert("Não encontrado!");
                }
            }).fail((res) => {
                alert(res);
            });
        }
    });
    
    </script>
  
  
  
</body>

</html>