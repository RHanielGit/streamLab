<?php
    $conn = new mysqli("localhost", "betal247_streamlabu", "fMavZiDMJf{b", "betal247_streamlab");
    $rota = $_GET["rota"];
    $hoje = date("y-m-d");
    $admin = "administrador";
    
    if(isset($rota) && !empty($rota)){
        if($rota == "create"){
            $id = $_GET["id"];
            $nome = $_GET["nome"];
            $duracao = $_GET["duracao"];
            $classificacao_indicativa = $_GET["classificacao_indicativa"];
            $descricao = $_GET["descricao"];
            $ano = $_GET["ano"];
            $diretores = $_GET["diretores"];
            $atores_principais = $_GET["atores_principais"];
            $produtores = $_GET["produtores"];
            $avaliacao = $_GET["avaliacao"];
            $categoria = $_GET["categoria"];
            $link_thumbnail = $_GET["link_thumbnail"];
            $link_banner = $_GET["link_banner"];
            $link_filme = $_GET["link_filme"];
            $link_trailer = $_GET["link_trailer"];
             
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO `filmes`(`id`, `nome`, `duracao`, `classificacao_indicativa`, `descricao`, `ano`, `diretores`, `atores_principais`, `produtores`, `data_cadastro`, `administrador`, `avaliacao`) VALUES
            ('".$id."','".$nome."','".$duracao."','".$classificacao_indicativa."','".$descricao."','".$ano."','".$diretores."','".$atores_principais."','".$produtores."','".$hoje."','".$admin."','".$avaliacao."');";
            
            if ($conn->query($sql) === TRUE) {
              echo "1";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $sql = "INSERT INTO `categoria`(`categorias`, `filme`) VALUES ('".$categoria."','".$id."')";
            
            if ($conn->query($sql) === TRUE) {
              echo "2";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $sql = "INSERT INTO `conteudos`(`filme`, `link_thumbnail`, `link_banner`, `link_filme`, `link_trailer`) VALUES ('".$id."','".$link_thumbnail."','".$link_banner."','".$link_filme."','".$link_trailer."')";
            
            if ($conn->query($sql) === TRUE) {
              echo "3";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            
            unset($rota);
            $conn->close();
            
        }
        
        if($rota == "read"){
            $id = $_GET["id"];
            $dados = [
                "nome" => [],
                "duracao" => [],
                "classificacao_indicativa" => [],
                "descricao" => [],
                "ano" => [],
                "diretores" => [],
                "atores_principais" => [],
                "produtores" => [],
                "avaliacao" => [],
                "categoria" => [],
                "link_thumbnail" => [],
                "link_banner" => [],
                "link_filme" => [],
                "link_trailer" => [],
            ];
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "select a.nome, a.duracao, a.classificacao_indicativa, a.descricao, a.ano, a.diretores, a.atores_principais, a.produtores, a.avaliacao, b.categorias, c.link_thumbnail, c.link_banner, c.link_filme, c.link_trailer FROM filmes AS a INNER JOIN categoria AS b ON a.id = b.filme INNER JOIN conteudos AS c ON a.id = c.filme WHERE a.id = '".$id."';";
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $dados["nome"] = $row["nome"];
                $dados["duracao"] = $row["duracao"];
                $dados["classificacao_indicativa"] = $row["classificacao_indicativa"];
                $dados["descricao"] = $row["descricao"];
                $dados["ano"] = $row["ano"];
                $dados["diretores"] = $row["diretores"];
                $dados["atores_principais"] = $row["atores_principais"];
                $dados["produtores"] = $row["produtores"];
                $dados["avaliacao"] = $row["avaliacao"];
                $dados["categoria"] = $row["categorias"];
                $dados["link_thumbnail"] = $row["link_thumbnail"];
                $dados["link_banner"] = $row["link_banner"];
                $dados["link_filme"] = $row["link_filme"];
                $dados["link_trailer"] = $row["link_trailer"];
                echo json_encode($dados);
            } else {
              echo "404";
            }
            unset($rota);
            $conn->close();
        }
        
        if($rota == "update"){
            $id = $_GET["id"];
            $nome = $_GET["nome"];
            $duracao = $_GET["duracao"];
            $classificacao_indicativa = $_GET["classificacao_indicativa"];
            $descricao = $_GET["descricao"];
            $ano = $_GET["ano"];
            $diretores = $_GET["diretores"];
            $atores_principais = $_GET["atores_principais"];
            $produtores = $_GET["produtores"];
            $avaliacao = $_GET["avaliacao"];
            $categoria = $_GET["categoria"];
            $link_thumbnail = $_GET["link_thumbnail"];
            $link_banner = $_GET["link_banner"];
            $link_filme = $_GET["link_filme"];
            $link_trailer = $_GET["link_trailer"];
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "UPDATE `filmes` SET `nome`='".$nome."',`duracao`='".$duracao."',`classificacao_indicativa`='".$classificacao_indicativa."',`descricao`='".$descricao."',`ano`='".$ano."',`diretores`='".$diretores."',`atores_principais`='".$atores_principais."',`produtores`='".$produtores."',`avaliacao`='".$avaliacao."' WHERE id = '".$id."';";
            if($conn->query($sql) === TRUE){
              echo "1";
            } else {
              echo "Error updating record: " . $conn->error . $sql;
            }
            
            $sql = "UPDATE `categoria` SET categorias='".$categoria."' WHERE filme = '".$id."';";
            
            if($conn->query($sql) === TRUE){
              echo "2";
            } else {
              echo "Error updating record: " . $conn->error . $sql;
            }
            
            $sql = "UPDATE `conteudos` SET `link_thumbnail`='".$link_thumbnail."',`link_banner`='".$link_banner."',`link_filme`='".$link_filme."',`link_trailer`='".$link_trailer."' WHERE filme = '".$id."';";
            
            if($conn->query($sql) === TRUE){
              echo "3";
            } else {
              echo "Error updating record: " . $conn->error . $sql;
            }
            
            unset($rota);
            $conn->close();
        }
        
        if($rota == "delete"){
            $id = $_GET["id"];
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "DELETE FROM categoria WHERE filme = '".$id."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "1";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            $sql = "DELETE FROM conteudos WHERE filme='".$id."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "2";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            $sql = "DELETE FROM filmes WHERE id='".$id."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "3";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            unset($rota);
            $conn->close();
        }
        
        if($rota == "createLogin"){
            $nome = $_GET["nome"];
            $senha = $_GET["senha"];
            $email = $_GET["email"];

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO `usuarios`(`email`, `nome`, `senha`) VALUES ('".$email."','".$nome."','".$senha."');";
            
            if ($conn->query($sql) === TRUE) {
              echo "1";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            unset($rota);
            $conn->close();
        }
        
        if($rota == "readLogin"){
            $senha = $_GET["senha"];
            $email = $_GET["email"];

            $sql = "SELECT `email`, `nome`, `senha` FROM `usuarios` WHERE email = '".$email."' AND senha = '".$senha."'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $sql = "SELECT tipo_plano FROM `planos` WHERE email = '".$email."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "0";   
                }else{
                    echo "1";
                }
                
            } else {
              echo "Conta não encontrada!";
            }
            unset($rota);
            $conn->close();
        }
        
        if($rota == "addPlan"){
            $email = $_GET["email"];
            $plano = $_GET["plano"];
            $sql = "INSERT INTO `planos`(`email`, `tipo_plano`) VALUES ('".$email."','".$plano."')";
            if ($conn->query($sql) === TRUE) {
              echo "1";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            unset($rota);
            $conn->close();
        }
    }
    
    


?>