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
    
    <section class="login">
        <div class="container">
            <div class="row text-center pt-5">
                <div class="col-6 offset-3 logo-streamlab mb-3">
                    STREAM<span>LAB</span>
                </div>
                <div class="col-6 offset-3 box-login" style="padding: 50px 0">
                    <div class="text-1 mb-3">
                        Criar conta
                    </div>
                    
                        <div class="mb-3">
                            <input type="email" placeholder="Email" id="email">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Nome de usuário" id="nome">
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Senha" id="senha">
                        </div>
                        <div class="text-other mb-3">
                            - ou -
                        </div>
                        <div class="login-google mb-3">
                            <button type="button"><i class="fab fa-google"></i></button>
                        </div>
                        <div class="mb-4">
                            <button type="button" class="btn btn-login" id="create-account">Criar Conta</button>
                        </div>
                    
                    <div class="text-2 mb-4">
                        Já tem uma conta?<a href="https://api.polimetal.com.br/projeto/streamlab/login.php"> Clique aqui</a>
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
  <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>

  <!-- Initialize Swiper -->
  <script>
  
    document.getElementById("create-account").addEventListener("click", () => {
        var email = document.getElementById("email").value;
        var nome = document.getElementById("nome").value;
        var senha = document.getElementById("senha").value;
        if(email != "" && nome != "" && senha != ""){
            $.get("api/filmes.php", {rota: "createLogin", email: email, nome: nome, senha: senha}, (res) => {
                if(res == "1"){
                    alert("Cadastrado!");
                    window.location.href="https://api.polimetal.com.br/projeto/streamlab/login.php";
                }else{
                    alert("Usuário já cadastrado!");
                }
            });
        }else{
            alert("Nem todos os campos foram digitados!");
        }
    });
  </script>
  
  
</body>

</html>