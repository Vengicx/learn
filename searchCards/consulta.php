<?php
    require "conecta.php";
    
    if(isset($_POST["procurar"])){
        $nome = $_POST["procurar"];
    }

    if(isset($nome)){
        $consulta = $pdo->prepare("SELECT * FROM pessoa WHERE nome LIKE '%$nome%");

    }else{
        $consulta = $pdo->prepare("SELECT * FROM pessoa order by nome");
    }

    $consulta->execute();

    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
        $id = $dados->id;
        $nome = $dados->nome;
        //$foto = $dados->foto;
        //<img class='card-img-top' src='../arquivos/$foto' alt='$foto'>
        $cargo = $dados->cargo;
        $cpf = $dados->cpf;
        
        echo "<div class='card' style='width: 18rem;'>
                
                <div class='card-body'>
                    <h5 class='card-title'>$nome</h5>
                    <p class='card-text'>ID: $id</p>
                    <p class='card-text'>CPF: $cpf</p>
                    <p class='card-text'>Cargo: $cargo</p>
                    <a href='#' class='btn btn-primary'>Legal!</a>
                </div>
            </div>";
        
    
}

?>