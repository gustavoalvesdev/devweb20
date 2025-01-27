<?php 

class Pessoa 
{   
    private string $nome;
    private int $idade;
    private string $sexo;
    private string $dataNascimento;
    private string $ufNascimento;
    private string $endereco;
    private string $email;
    private string $telefone;

    public function __construct()
    {
        $this->nome = '';
        $this->idade = 0;
        $this->sexo = '';
        $this->dataNascimento = '';
        $this->ufNascimento = '';
        $this->endereco = '';
        $this->email = '';
        $this->telefone = '';
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function getIdade(): int 
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void 
    {
        $this->idade = $idade;
    }

    public function getSexo(): string 
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): void 
    {
        $this->sexo = $sexo;
    }

    public function getDataNascimento(): string 
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento): void 
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getUfNascimento(): string 
    {
        return $this->ufNascimento;
    }

    public function setUfNascimento(string $ufNascimento): void 
    {
        $this->ufNascimento = $ufNascimento;
    }

    public function getEnedereco(): string 
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void 
    {
        $this->endereco = $endereco;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function setEmail(string $email): void 
    {
        $this->email = $email;
    }

    public function getTelefone(): string 
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone; 
    }

    public static function apresentarPessoa(): string 
    {
        return 'Apresentando pessoas no contexto estático';
    }
}
