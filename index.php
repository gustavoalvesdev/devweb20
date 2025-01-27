<?php 

require 'Pessoa.php';
require 'Funcionario.php';

$pessoa = new Pessoa();
//echo Pessoa::apresentarPessoa();

$pessoa->setNome('Gustavo');
$pessoa->setIdade(33);
//echo 'Meu nome é ' . $pessoa->getNome() . ' e eu tenho ' . $pessoa->getIdade() . ' anos';

$funcionario = new Funcionario();

$funcionario->setNome('Luiz');
$funcionario->setCargo('Eletricista');
$funcionario->setIdade(55);
$funcionario->setSalario(3200.00);

echo 'Olá, meu nome é ' . $funcionario->getNome() . ', eu tenho ' . $funcionario->getIdade() . ' anos e eu trabalhando como ' . $funcionario->getCargo() . ', ganhando R$ ' . $funcionario->getSalario(); 
