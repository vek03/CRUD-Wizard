<?php

namespace App\Route;

use App\Controller\ClienteController;
use App\Model\Cliente;

class Router
{
    private $controller;

    public function __construct() 
    {
        $this->controller = new ClienteController();
    }

    public function run(string $requestUri)
    {
        $requestUri = parse_url($requestUri, PHP_URL_PATH);
        
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $this->GET($requestUri);
                break;

            case 'POST':
                $this->POST($requestUri);
                break;

            default:
                http_response_code(404);
                echo "<script>alert('Página Não Encontrada! Clique OK para redirecionar...');document.location='/'</script>";
        }
    }

    public function GET(string $requestUri){
        switch ($requestUri) {
            case '/':
                $this->controller->index();
                break;

            case '/cadastro':
                $this->controller->create();
                break;

            case '/consulta':
                $this->controller->list();
                break;

            case '/editar':
                $cliente = new Cliente();
                $cliente->setCliente_Id($_GET['cliente']);
                $this->controller->edit($cliente);
                break;

            default:
                http_response_code(404);
                echo "<script>alert('Página Não Encontrada! Clique OK para redirecionar...');document.location='/'</script>";
        }
    }

    public function POST(string $requestUri){
        switch ($requestUri) {
            case '/cadastro':
                $cliente = new Cliente($_POST);
                $this->controller->store($cliente);
                break;

            case '/editar':
                $cliente = new Cliente($_POST);
                $cliente->setCliente_Id($_GET['cliente']);
                $this->controller->update($cliente);
                break;

            case '/deletar':
                $cliente = new Cliente();
                $cliente->setCliente_Id($_GET['cliente']);
                $this->controller->delete($cliente);
                break;
                
            default:
                http_response_code(404);
                echo "<script>alert('Página Não Encontrada! Clique OK para redirecionar...');document.location='/'</script>";
        }
    }
}