<?php 

Class PessoaController{

    public static function index(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();
        $model->getALLRows();
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form(){
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();
        $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function save(){
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];
        
        $model-> save();

        header("Location: /pessoa");
    }

    public static function delete()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /pessoa");

    }

}
