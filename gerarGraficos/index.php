<?php
include "phplot.php";
include "contrib/data_table.php";
$diretorioFuncoes = $_SERVER['DOCUMENT_ROOT']."/common/function"; // Dir dos arquivos
$arrayExcecoes = array(); // * Coloque aqui os arquivos que você quer que não sejam incluidos



# Indicamos o título do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");


# Definimos os dados do gráfico
$dados = array(
		array('Janeiro', 10),
		array('Fevereiro', 5),
		array('Março', 4),
		array('Abril', 8),
		array('Maio', 7),
		array('Junho', 5),
);

$grafico->SetDataValues($dados);

# Mostramos o gráfico na tela
$grafico->DrawGraph();
?>