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
                        Cunsultar Filmes
                    </div>
                    <div class="mb-3">
                        <input type="text input-login" placeholder="Digite o id do filme..." id="id-include">
                    </div>
                    <div class="mb-4">
                        <button type="button" class="btn btn-login" id="consultar-include">Pesquisar</button>
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
                        <div class="text-1 mb-3">
                            Link Filme
                        </div>
                        <div class="mb-3">
                            <input type="text input-login" placeholder="Digite o link do filme..." id="linkfilme-include">
                        </div>
                        
                        <div class="mt-4">
                            <button type="button" class="btn btn-login" id="atualizar-include">Atualizar</button>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="btn btn-login" id="excluir-include">Excluir</button>
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
    
    document.getElementById("consultar-include").addEventListener("click", () => {
        if(document.getElementById("id-include").value != "" && document.getElementById("id-include").value != null){
            var id = document.getElementById("id-include").value;
            var content = document.getElementById("content-include");
            $.get("api/filmes.php", {rota: "read", id: id}, (res) => {
                if(res != 404){
                    var res = JSON.parse(res);
                    document.getElementById("imagem-include").innerHTML = '<img src="' + res.link_thumbnail + '" class="card-img-top" alt="...">';
                    document.getElementById("nome-include").value = res.nome;
                    document.getElementById("duracao-include").value = res.duracao;
                    document.getElementById("classif-include").value = res.classificacao_indicativa;
                    document.getElementById("desc-include").value = res.descricao;
                    document.getElementById("ano-include").value = res.ano;
                    document.getElementById("diretores-include").value = res.diretores;
                    document.getElementById("atores-include").value = res.atores_principais;
                    document.getElementById("produtores-include").value = res.produtores;
                    document.getElementById("avaliacao-include").value = res.avaliacao;
                    document.getElementById("categoria-include").value = res.categoria;
                    document.getElementById("thumbnail-include").value = res.link_thumbnail;
                    document.getElementById("banner-include").value = res.link_banner;
                    document.getElementById("linktrailer-include").value = res.link_trailer;
                    document.getElementById("linkfilme-include").value = res.link_filme;
                    
                    content.classList.remove("d-none");
                    content.classList.add("d-block");
                
                    document.getElementById("atualizar-include").addEventListener("click", () => {
                        var id = document.getElementById("id-include").value;
                        var imagem = document.getElementById("imagem-include").innerHTML;
                        var nome = document.getElementById("nome-include").value;
                        var duracao = document.getElementById("duracao-include").value;
                        var classificacao_indicativa = document.getElementById("classif-include").value;
                        var descricao = document.getElementById("desc-include").value;
                        var ano = document.getElementById("ano-include").value;
                        var diretores = document.getElementById("diretores-include").value;
                        var atores_principais = document.getElementById("atores-include").value;
                        var produtores = document.getElementById("produtores-include").value;
                        var avaliacao = document.getElementById("avaliacao-include").value;
                        var categoria =  document.getElementById("categoria-include").value;
                        var link_thumbnail =  document.getElementById("thumbnail-include").value;
                        var link_banner =  document.getElementById("banner-include").value;
                        var link_trailer = document.getElementById("linktrailer-include").value;
                        var link_filme = document.getElementById("linkfilme-include").value;
                        $.get("api/filmes.php", {rota: "update", id: id, nome: nome, duracao: duracao, classificacao_indicativa: classificacao_indicativa, descricao: descricao, ano: ano, diretores: diretores, atores_principais, produtores: produtores, avaliacao: avaliacao, categoria:categoria, link_thumbnail: link_thumbnail, link_banner: link_banner, link_filme: link_filme, link_trailer: link_trailer},
                        (res) => {
                            if(res == "123"){
                                alert("Atualizado!");
                                window.location.reload();
                            }else{
                                alert(res);
                            }
                        });
                    });
                    document.getElementById("excluir-include").addEventListener("click", () => {
                        $.get("api/filmes.php", {rota: "delete", id: id}, (res) => {
                            if(res == "123"){
                                alert("Excluído!");
                                window.location.reload();
                            }else{
                                alert(res);
                            }
                        });
                    });
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