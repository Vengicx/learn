<?php
    require "conecta.php";

    $consulta = $pdo->prepare("SELECT * FROM pessoa");
    $consulta->execute();

    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
        $id = $dados->id;
        $nome = $dados->nome;
        $foto = $dados->foto;
        $cargo = $dados->cargo;
        $cpf = $dados->cpf;
        
        echo "<div class='card' datanome='$nome' style='width: 18rem;'>
                <img class='card-img-top' src='../arquivos/$foto' alt='$foto'>
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