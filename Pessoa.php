<?php 

class Pessoa 
{   
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function chamarPessoa(): string 
    {
        return 'Hey, ' . $this->nome . '!';
    }

}
