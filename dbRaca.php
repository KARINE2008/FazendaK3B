<?php

if(filter_has_var(INPUT_POST, "btnGravar")) {
    spl_autoload_register(function ($class) {require_once "classes/{$class}.class.php";
    });

    //Criando uma instancia da classe Raça
    $raca = new Raca();
    $raca->setNome(filter_input(INPUT_POST,"raca"));

    //Tenta adicionar e exibe a mensagem ao usuario
    if ($raca->add()){
        echo "<script>window.alert('Raca adicionada com sucesso.');window.location.href=raca.php;</script>";
    }else{
        echo "<script>window.alert('Erro ao adicionar raça.'); window.open(document.referrer,'_self');</script>";
    }
}   
