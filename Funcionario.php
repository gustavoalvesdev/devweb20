<?php 

class Funcionario extends Pessoa 
{
    private string $cargo;
    private float $salario;

    public function getCargo(): string 
    {
        return $this->cargo; 
    }

    public function setCargo(string $cargo): void 
    {
        $this->cargo = $cargo;
    }

    public function getSalario(): float 
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void 
    {
        $this->salario = $salario;
    }
}
