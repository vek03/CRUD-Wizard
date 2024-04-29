<?php
namespace App\Model;

class Cliente
{
    private int $cliente_id;
    private string $nome;
    private string $email;
    private string $dt_nasc;

    public function __construct($cliente_atr = null) 
    {
        $this->cliente_id = $cliente_atr['cliente_id'] ?? 0;
        $this->nome = $cliente_atr['nome'] ?? '';
        $this->email = $cliente_atr['email'] ?? '';
        $this->dt_nasc = $cliente_atr['dt_nasc'] ?? '';
    }

    public function dataCode(){
        $partes = explode('/', $this->dt_nasc);
    
        $data_formatada = $partes[2] . '-' . $partes[1] . '-' . $partes[0];
    
        return $data_formatada;
    }

    public function dataFormatada(){
        $partes = explode('-', $this->dt_nasc);

        // Reorganiza as partes para o formato desejado
        $data_formatada = $partes[2] . '/' . $partes[1] . '/' . $partes[0];

        return $data_formatada;
    }

    public function getCliente_Id(): int
    {
        return $this->cliente_id;
    }

    public function setCliente_Id(int $cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }


    public function getNome(): String
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function getDt_Nasc(): string
    {
        return $this->dt_nasc;
    }

    public function setDt_Nasc(string $dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;
    }
}