<?php

namespace App;

use PDO;

class Funcionario extends Pessoa
{
    public $cro;
    public $especialidade;
    public $senha;
    public $perfil;

    public function cadastrar()
    {
        $db = new DataBase('funcionario');
        $this->id = $db->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'data_nascimento' => $this->data_nascimento,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'senha' => password_hash($this->senha, PASSWORD_DEFAULT),
            'perfil' => $this->perfil,
            'cro' => $this->cro,
            'especialidade' => $this->especialidade
        ]);
    }

    public static function listar()
    {
        return (new DataBase('Funcionario'))->select()->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
