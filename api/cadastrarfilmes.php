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
    <section class="login overflow-auto">
        <div class="container">
            <div class="row text-center pt-5">
                <div class="col-6 offset-3 logo-streamlab mb-3">
                    STREAM<span>LAB</span>
                </div>
                <div class="col-6 offset-3 box-login" style="padding: 50px 0">
                    <div class="text-1 mb-3">
                        Cadastrar Filmes
                    </div>
                    <div class="mb-3">
                        <input type="text input-login" placeholder="Digite o id do filme..." id="id-include">
                    </div>
                    <div class="mb-3">
                        <input type="text input-login" placeholder="Digite o link do filme..." id="linkfilme-include">
                    </div>
                    <div class="mb-4">
                        <button type="button" class="btn btn-login" id="pesquisar-include">Pesquisar</button>
                    </div>
                    <div class="d-none" id="content-include">
                        <div class="mb-3" id="imagem-include">
                            <!-- <img src="img/filmes/02-smb-dm-mobile-banner-1080x745-pl-f01-022723-63fe3cbc4df54-1.jpg" class="card-img-top" alt="..."> -->
                        </div>
                        <div class="text-1 mb-3">
                            Nome
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Nome" id="nome-include">
                        </div>
                        <div class="text-1 mb-3">
                            Duração
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Duração" id="duracao-include">
                        </div>
                        <div class="text-1 mb-3">
                            Classificação
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Classificação Indicativa" id="classif-include">
                        </div>
                        <div class="text-1 mb-3">
                            Descrição
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Descrição" id="desc-include">
                        </div>
                        <div class="text-1 mb-3">
                            Ano
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Ano" id="ano-include">
                        </div>
                        <div class="text-1 mb-3">
                            Diretores
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Diretores" id="diretores-include">
                        </div>
                        <div class="text-1 mb-3">
                            Atores
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Atores" id="atores-include">
                        </div>
                        <div class="text-1 mb-3">
                            Produtores
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Produtores" id="produtores-include">
                        </div>
                        <div class="text-1 mb-3">
                            Avaliação
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Avaliação" id="avaliacao-include">
                        </div>
                        <div class="text-1 mb-3">
                            Categoria
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Categoria" id="categoria-include">
                        </div>
                        <div class="text-1 mb-3">
                            Thumb
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Thumbnail" id="thumbnail-include">
                        </div>
                        <div class="text-1 mb-3">
                            Banner
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Banner" id="banner-include">
                        </div>
                        <div class="text-1 mb-3">
                            Trailer
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Link do trailer" id="linktrailer-include">
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-login" id="cadastrar-include">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script>
    
    document.getElementById("pesquisar-include").addEventListener("click", () => {
        if(document.getElementById("id-include").value != "" && document.getElementById("id-include").value != null && document.getElementById("linkfilme-include").value != ""){
            var id = document.getElementById("id-include").value;
            var link_filme = document.getElementById("linkfilme-include").value;
            var content = document.getElementById("content-include");
            $.get("https://imdb-api.com/pt/API/Title/k_n41qp4y2/" + id + "/FullActor,FullCast,Posters,Images,Trailer,Ratings", (res) => {
                if(res.title){
                    if(res.posters.posters.length == 0){
                        alert("Filme sem imagens!")
                    
                    }else{
                    document.getElementById("imagem-include").innerHTML = '<img src="' + res.posters.posters[0].link + '" class="card-img-top" alt="...">';
                    }
                    document.getElementById("nome-include").value = res.title;
                    document.getElementById("duracao-include").value = res.runtimeStr;
                    document.getElementById("classif-include").value = res.contentRating;
                    document.getElementById("desc-include").value = res.plot;
                    document.getElementById("ano-include").value = res.year;
                    document.getElementById("diretores-include").value = res.directors;
                    var aux = "";
                    for(let i = 0; i < res.actorList.length; i++){
                        aux += res.actorList[i].name + ", ";
                    }
                    document.getElementById("atores-include").value = aux;
                    document.getElementById("produtores-include").value = "Produtores";
                    document.getElementById("avaliacao-include").value = res.imDbRating;
                    document.getElementById("categoria-include").value = res.genreList[0].key;
                    document.getElementById("thumbnail-include").value = res.posters.posters[0].link;
                    document.getElementById("banner-include").value = res.posters.posters[0].link;
                    document.getElementById("linktrailer-include").value = res.trailer.linkEmbed;
                    
                    content.classList.remove("d-none");
                    content.classList.add("d-block");

                    var imagem = res.posters.posters[0].link.toString();
                    var nome = document.getElementById("nome-include").value;
                    var duracao = document.getElementById("duracao-include").value;
                    var cassificacao = document.getElementById("classif-include").value;
                    var descricao = document.getElementById("desc-include").value;
                    var ano = document.getElementById("ano-include").value;
                    var diretores = document.getElementById("diretores-include").value;
                    var atores = document.getElementById("atores-include").value;
                    var produtores = document.getElementById("produtores-include").value;
                    var avaliacao = document.getElementById("avaliacao-include").value;
                    var categoria =  document.getElementById("categoria-include").value;
                    var thumbnail =  document.getElementById("thumbnail-include").value;
                    var banner =  document.getElementById("banner-include").value;
                    var linktrailer = document.getElementById("linktrailer-include").value;
                    
                    document.getElementById("cadastrar-include").addEventListener("click", () => {
                        if(imagem != "" && nome != "" && duracao != "" && cassificacao != "" && descricao != "" && ano != "" && diretores != "" && atores != "" && produtores != "" && avaliacao != "" && categoria != "" && banner != "" && linktrailer != ""){
                            $.get("api/filmes.php", {rota: "create", id: id, nome: nome, duracao: duracao, classificacao_indicativa: cassificacao, descricao: descricao, ano: ano, diretores: diretores, atores_principais: atores, produtores: produtores, avaliacao: avaliacao, categoria: categoria, link_thumbnail: thumbnail, link_banner: banner, link_filme: link_filme, link_trailer: linktrailer},
                            (res) => {
                                if(res == "123"){
                                    alert("Cadastrado!")
                                    window.location.reload();
                                }else{
                                    alert(res);
                                }
                            });
                        }else{
                            alert("Nem todos os campos foram digitados!")
                        }
                    });
                }else{
                    alert("Não encontrado!");
                }
            }).fail((res) => {
                alert(res);
            });
        }else{
            alert("Nem todos os campos foram digitados!")
        }
    });
    </script>
</body>

</html>