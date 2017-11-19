<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function imprimir()
    {
       $dado = $_POST['dado'];
       $resultado = $dado % 2 == 0 ? 'Par' : 'Impar';

       require './app/views/imprime.php';
    }

    public function salvar()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['patrocinador'] = $_POST['patrocinador'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('times', $dados);

        //devolver uma pagina com mensagem de ok
        // require './app/views/foi.php';

        //redirecionar para a rota /cadastro
        header('Location: /cadastro');
        
        
    }

    public function consultar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('alunos');
        $dados = $q->selectOrder('dados','nome','desc');
        
        
        // print_r($dados);
        // die();
        
        //chama a view
        require './app/views/consultar.php';

    }

    public function cj()
    {
        $q = new QueryBuilder();

        $dados = $q->select('times');

        require './app/views/cj.php';


    }
   
}
