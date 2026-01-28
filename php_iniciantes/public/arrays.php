<?php

// Arrays em PHP são estruturas que podem armazenar múltiplos valores em uma única variável
$names = ['Marcelo', 'Laura', 'Thiago'];

// Criação de array com vaarios tipos de dados
$data = ['Marcelo', 25, false];
print_r($data);
// Printar com o var_dump permite visualizar o tipo de dados e valor que ele se encontra
var_dump($data);

// Acessando valores do array
var_dump($names[1]);

// Adicionando valores no final do array
$data[3] = 'teste';
var_dump($data);

// Adicionando sem saber a qtde de elementos
$length = count($data); // conta a qtde de elementos, e nao a posicao
$data[$length] = 'novo valor';

// Outra opção de adicionar na ultima posicao
array_push($data, 'array_push');

// Adicionando no inicio do array
$data[0] = 'first'; // se ja existir, ele sobreescreve um ja existente

array_unshift(data, 'first'); // move o todos elementos para a direita e add o first na primeira posicao

// Uma outra maneira de construir arrays (definindo o nome do indice)
$person = ['name' => 'Marcelo', 'age' => 25, 'documents' => ['cpf' => '00000000', 'rg' => 'MG000000']];
var_dump($person);