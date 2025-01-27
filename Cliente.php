<?php 

class Cliente extends Pessoa 
{
    private float $limiteDeCredito;

    public function getLimiteDeCredito(): float 
    {
        return $this->limiteDeCredito;
    }

    public function setLimiteDeCredito(float $limiteDeCredito): void 
    {
        $this->limiteDeCredito = $limiteDeCredito;
    }
}
