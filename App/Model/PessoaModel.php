<?php 

Class PessoaModel{

    public $id, $nome, $cpf, $data_nascimento;
    public $rows;

    public function save(){
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        if (empty($this->id)) 
        {

            $dao->insert($this);

        }else{

            $dao->update($this);
        
        }      
    }

    public function getALLRows(){
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $obj = $dao->selectById($id);

        if ($obj) 
        {
           return $obj;
        }else{
            return new PessoaDAO();
        }
    }

    public function delete(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();
        $obj = $dao->delete($id);
    }
}
