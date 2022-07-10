<?php
    include("Venda.php");
    include("Produto.php");

    $venda = new Venda();
    $venda->gerarP();
    $venda->calcularV();

    echo "</br>";
    echo $venda->imprimir();
?>
