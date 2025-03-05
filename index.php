<?php 

interface DankiInterface {
    public function getNome();
    public function setNome($nome);
}

class DankiCode implements DankiInterface {

    private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}

$danki = new DankiCode();
$danki->setNome('Gustavo');
print 'Nome: ' . $danki->getNome();
