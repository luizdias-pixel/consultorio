<?php

use App\Funcionario;

include('../vendor/autoload.php');
$action = $_GET['action'];
$funcionario = new Funcionario();
switch ($action) {
    case 'cadastrar':
        $funcionario->nome = $_POST['nome'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->email = $_POST['email'];
        $funcionario->endereco = $_POST['endereco'];
        $funcionario->cro = $_POST['cro'];
        $funcionario->especialidade = $_POST['especialidade'];
        $funcionario->perfil = $_POST['perfil'];
        $funcionario->senha = $_POST['senha'];
        $funcionario->cadastrar();

        header('location: /consultorio/view/funcionario/listar.php');

        break;
    case 'alterar':
        break;

    case 'excluir':
        break;
}
