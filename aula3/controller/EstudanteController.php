<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';

class EstudanteController {
    public function listar() {
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listar();

        $_REQUEST['estudantes'] = $listaEstudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/view/EstudanteView.php';
    }
    public function salvar()
    {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        $estudanteModel = new EstudanteModel();
        $estudanteModel -> salvarModel($nome, $idade);
    }
}
