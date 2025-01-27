<?php 

require 'Pessoa.php';
require 'Funcionario.php';
require 'Cliente.php';

$funcionario = new Funcionario();

$funcionario->setNome('Luiz');
$funcionario->setCargo('Eletricista');
$funcionario->setIdade(55);
$funcionario->setSalario(3200.00);

// echo 'Olá, meu nome é ' . $funcionario->getNome() . ', eu tenho ' . $funcionario->getIdade() . ' anos e eu trabalhando como ' . $funcionario->getCargo() . ', ganhando R$ ' . $funcionario->getSalario(); 

$cliente = new Cliente();

$cliente->setNome('Fernando');
$cliente->setLimiteDeCredito(2000.50);

echo 'Olá, meu nome é ' . $cliente->getNome() . ' e meu limite de crédito é de R$ ' . $cliente->getLimiteDeCredito();
