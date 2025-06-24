<?php
spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});
//Criando uma instância da classe Raça
$raca = new Raca();
if (filter_has_var(INPUT_POST, "btnGravar")):
    $raca->setNome(filter_input(INPUT_POST, "raca", FILTER_SANITIZE_STRING));
    $idRaca = filter_input(INPUT_POST, "idRaca", FILTER_SANITIZE_NUMBER_INT);
    if (empty($idRaca)):
        //Tenta adicionar e exibir a mensagem ao usuário
        if ($raca->add()) {
            echo "";
        } else {
            echo "";
        }
    else:
        if ($raca->update('id_raca', $idRaca)) {
            echo "";
        } else {
            echo "";
        }
    endif;
elseif (filter_has_var(INPUT_POST, "btnDeletar")):
    $idRaca = intval(filter_input(INPUT_POST, "idRaca"));
    if ($raca->delete("id_raca", $idRaca)) {
        header("location:racas.php");
    } else {
        echo "";
    }
endif;
?>