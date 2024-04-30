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
        $query = "CALL store(:nome, :email, :dt_nasc)";

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
        $query = "CALL readAll()";
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

        $query = "CALL readCliente(:id)";
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
        $query = "CALL updateCliente(:id, :nome, :email, :dt_nasc)";

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
        
        $query = "CALL deleteCliente(:id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id , PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}