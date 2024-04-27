<?php
namespace App\Repository;

use App\Database\Database;
use App\Model\Cliente;
use PDO;

class ClienteRepository 
{
    private $conn;

    public function __construct() 
    {
        $this->conn = Database::getInstance();
    }

    public function store(Cliente $cliente)
    {
        $query = "INSERT INTO clientes (nome, email, dt_nasc) VALUES (:nome, :email, :dt_nasc)";

        $stmt = $this->conn->prepare($query);

        $nome = $cliente->getNome();
        $email = $cliente->getEmail();
        $dt_nasc = $cliente->getDt_Nasc();

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":dt_nasc", $dt_nasc);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    public function readAll() 
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $clientes = array();
            $i = 0;

            foreach ($lista as $l) {
                $cliente = new Cliente;
                $cliente->setCliente_Id($l['cliente_id']);
                $cliente->setNome($l['nome']);
                $cliente->setEmail($l['email']);
                $cliente->setDt_Nasc($l['dt_nasc']);
                $clientes[$i] = $cliente;
                $i++;
            }

            return $clientes;
        }
        
        return false;
    }


    public function read(Cliente $cliente) {
        $cliente_id = $cliente->getCliente_Id();

        $query = "SELECT * FROM clientes WHERE cliente_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $cliente_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $cliente = new Cliente();
            $cliente->setCliente_Id($result['cliente_id']);
            $cliente->setNome($result['nome']);
            $cliente->setEmail($result['email']);
            $cliente->setDt_Nasc($result['dt_nasc']);

            return $cliente;
        }
        
        return false;
    }


    public function update(Cliente $cliente) 
    {
        $query = "UPDATE clientes SET nome = :nome, email = :email, dt_nasc = :dt_nasc WHERE cliente_id = :id";

        $stmt = $this->conn->prepare($query);

        $id = $cliente->getCliente_Id();
        $nome = $cliente->getNome();
        $email = $cliente->getEmail();
        $dt_nasc = $cliente->getDt_Nasc();

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":dt_nasc", $dt_nasc);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    public function delete(Cliente $cliente) 
    {
        $id = $cliente->getCliente_Id();
        
        $query = "DELETE FROM clientes WHERE cliente_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id , PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}