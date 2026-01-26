<?php

/*
    Constantes em PHP

    As constantes são identificadores para valores que não mudam durante a execução do script
    O nome das constantes devem sempre ser em letras maiúsculas por convenção
*/

define ('NAME', 'Marcelo');
echo NAME;

// Outro exemplo de criação de constantes utilizando function
/*
    Sempre que uam constante for criada com __NOMEDAFUNCAO__ ela irá retornar o nome da função
*/
function teste(){
    echo __FUNCTION__;
}
echo teste(); // Irá imprimir o nome da função "teste"

// Mais um exemplo
define ('SITE', 'www.marcelo.com.br');
if(define('SITE')){
    echo 'O nome do site foi definido';
}