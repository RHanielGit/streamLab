<!doctype html>
<html lang="pt">

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
  
  <style type="text/css">
	img{
    border-radius: 15px;
    padding:flex;
  }
  td{
    padding-right:20px; padding-left:20px; color: #FFFFFF;
  }
  h6{
    color: #858181;
  }
  h5{
    color: #FFFFFF;
  }
  h3{
    color: #FFFFFF;
  }
    /* Search bar */
    
    
    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }
    .has-search input{
        background-color: transparent;
        border-left: none;
        border-right: none;
        border-top: none;
        border-radius: 0;
        border-bottom: 2px solid rgba(255,255,255,0.22);
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: 500;
        color: #FFF !important;
    }
    
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: rgba(255,255,255, 0.22) !important;
      opacity: 1; /* Firefox */
    }
    .has-search input:hover,.has-search input:focus{
        background: transparent;
        border-left: none;
        border-right: none;
        border-top: none;
        border-radius: 0;
        border-bottom: 2px solid #8F00FF;
        outline: 0;
    }
    
    .has-search .fa-search{
        font-size: 20px;
        color: #FFF;
    }
    
    .list-search{
        font-family: 'Montserrat', sans-serif;
        font-size: 22px;
        font-weight: 500;
        color: #FFF !important;
    }
    
    .list-search-streamlab{
        margin-top: 15px;
    }
    
    .list-search-streamlab a{
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #FFF;
        
        transition: all 0.3s;
        text-decoration: none;
    }
    .list-search-streamlab a:hover{
        color: #8F00FF;
    }
    .search-img img{
        display: block;
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 0;
    }
	</style>

</head>

<body>

    <? require_once("utils/header.php") ?>

    <section class="container mt-4">
        <div class="row">
            <div class="col-3 pe-4">
                <div class="row">
                    <div class="form-group has-search">
                        <input type="text" class="form-control search-streamlab" placeholder="Pesquisar">
                    </div>
                </div>
                <div class="row mt-3 list-search">
                    <div class="col-12" style="text-align:left">
                        <div class="list-search-streamlab">
                            <a href="#">Tudo</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">TV Shows</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Filmes</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Comédia</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Horror</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Romance</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Ação</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Thriller</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Drama</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Mistério</a>
                        </div>
                        <div class="list-search-streamlab">
                            <a href="#">Ficção Ciêntifica</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="col-12">
                    <div class="row mb-4 search-img">
                        <div class="col-3">
                            <img src='img/fototeste.jpg'/>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                            <div>
                            <div class="text-1">Star Wars: Episode IX - The Rise of Skywalker (2019)</div>
                            <div class="text-2 mt-2">The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-4 search-img">
                        <div class="col-3">
                            <img src='img/filmes/AStarIsBorn.jpg'/>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                            <div>
                            <div class="text-1">The Star Is Born (2018)</div>
                            <div class="text-2 mt-2">A musician helps a young singer find fame as age and alcoholism send his own career into a downward spiral.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-4 search-img">
                        <div class="col-3">
                            <img src='img/filmes/TheStarWarsHoliday.jpg'/>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                            <div>
                            <div class="text-1">The Star Wars Holiday Special (1978)</div>
                            <div class="text-2 mt-2"> Chewbacca and Han Solo try to get to the Wookiee homeworld of Kashyyyk to celebrate Life Day, but are impeded by an Imperial blockade. Chewie's family passes the time with various forms of entertainment.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-4 search-img">
                        <div class="col-3">
                            <img src='img/filmes/StarWarsCloneWars.jpg'/>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                            <div>
                            <div class="text-1">Star Wars: Clone Wars (2008)</div>
                            <div class="text-2 mt-2">Jedi Knights lead the Grand Army of the Republic against the droid army of the Separatists.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-4 search-img">
                        <div class="col-3">
                            <img src='img//filmes/StarWarsEpisode1.jpg'/>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                            <div>
                            <div class="text-1">Star Wars: Episode I - The Phantom Menace (1999)</div>
                            <div class="text-2 mt-2">Two Jedi escape a hostile blockade to find allies and come across a young boy who may bring balance to the Force, but the long dormant Sith resurface to claim their old glory.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    



    </section>
  </div>





 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>