<?php

echo "<h1> Gerar Excel e csv </h1>";

$cabecalho = ['id', 'nome', 'email', 'endereco'];

$dados = [
    [
        'id' => '1',
        'nome' => 'Cueio',
        'email' => 'coelho@email.com',
        'endereco' => 'Rua almondegas',
    ],[
        'id' => '2',
        'nome' => 'Salmon',
        'email' => 'saimon@email.com',
        'endereco' => 'Rua teletubies',
    ],[
        'id' => '3',
        'nome' => 'Jessica',
        'email' => 'parlamo@hmail.com',
        'endereco' => 'Rua Rodovias',
    ],[
        'id' => '4',
        'nome' => 'Gatuno',
        'email' => 'letras@yahoo.com',
        'endereco' => 'Rua Cancao',
    ]
];

//abrir o arquivo
$arquivo  = fopen('file.csv','w');

//escrever o cabeçalho no arquivo
fputcsv($arquivo,$cabecalho, ';' );

//escrever o conteúdo do arquivo
foreach ($dados as $dado) {
    fputcsv($arquivo, $dado, ';');
}

//fechar arquivo
fclose($arquivo);