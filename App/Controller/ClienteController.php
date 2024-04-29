<?php
namespace App\Controller;

use App\Model\Cliente;
use App\Helper\RouteHelper;
use App\Repository\ClienteRepository;
use PDO;

class ClienteController
{
    private $repository;
    private $route;

    public function __construct() 
    {
        $this->repository = new ClienteRepository();
        $this->route = new RouteHelper();
    }

    public function index(){
        $this->create();
    }

    public function create(){
        include 'View/create.php';
    }

    public function list(){
        $clientes = $this->repository->readAll();
        include 'View/list.php';
    }

    public function edit(Cliente $cliente){
        $cliente = $this->repository->read($cliente);
        include 'View/edit.php';
    }

    public function store(Cliente $cliente)
    {
        $result = $this->repository->store($cliente);

        session_start();
        $_SESSION['message'] = 'Cliente Cadastrado!';
        return $this->route->redirect('/consulta');
    }


    public function update(Cliente $cliente) 
    {
        $result = $this->repository->update($cliente);

        session_start();
        $_SESSION['message'] = 'Cliente Cadastrado!';
        return $this->route->redirect('/consulta');
    }


    public function delete(Cliente $cliente) 
    {
        $result = $this->repository->delete($cliente);

        echo "<script>alert('Cliente Deletado!');</script>";
        return $this->route->redirect('/consulta');
    }
}