<?php
namespace App\Controller;

use App\Database\Database;
use App\Model\Cliente;
use App\Repository\ClienteRepository;
use PDO;

class ClienteController
{
    private $repository;

    public function __construct() 
    {
        $this->repository = new ClienteRepository();
    }

    public function index(){
        $this->create();
    }

    public function create(){
        header("Location: View/create.php");
        exit;
    }

    public static function list(){
        header("Location: View/list.php");
        exit;
    }

    public function edit(Cliente $cliente){
        header("Location: View/edit.php?cliente=".$cliente->getCliente_Id());
        exit;
    }

    public function store(Cliente $cliente)
    {
        $result = $this->repository->store($cliente);

        return $this->list();
    }


    public function readAll() 
    {
        return $this->repository->readAll();
    }


    public function read(Cliente $cliente) {
        return $this->repository->read($cliente);
    }


    public function update(Cliente $cliente) 
    {
        $result = $this->repository->update($cliente);

        return $this->list();
    }


    public function delete(Cliente $cliente) 
    {
        $result = $this->repository->delete($cliente);

        return $this->list();
    }
}