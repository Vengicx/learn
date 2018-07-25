<?php
$handle = @fopen("arquivodeentrada.txt", "r");//fopen abre um arquivo ou uma URL, esse "r" no final, é só para ele ler e somente isso.
if ($handle) {//se ele conseguir ler
    while (($buffer = fgets($handle, 4096)) !== false) {//enquanto a variavel buffer receber os 4096 bytes do arquivodeentrada.txt e ele não for falso
        //echo $buffer; ele vai mostrar o conteudo
        $_a = fgets($handle);
        $_b = fgets($handle);

        echo "$_a";
        echo "$_b";
    }
    if (!feof($handle)) {
        echo "Erro: falha inexperada de fgets()\n";//caso ele não encontrar mais nada ele mostra isso, fiz uns testes mas ele não apareceu de jeito nenhum
    }

    fclose($handle);
}
?>