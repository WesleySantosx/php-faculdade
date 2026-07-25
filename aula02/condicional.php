<?php 
$numero = 5;

echo "O número é: $numero<br>\n";

if ($numero > 5) {
    echo "\nO número é maior que 5.";
} else {
    echo "\nO número é menor ou igual que 5.";
}

for($i = 1; $i <= 20; $i++) {
    echo "\nContagem: $i";
}

function somar($a, $b) {
    return $a + $b;
}
echo "\nA soma de 10 e 5 é: " . somar(10, 5);


$alunos = [
    [

        'nome' => 'João',
        'idade' => 20,
        'curso' => 'Engenharia',
        'sexualidade' => 'Masculino'
    ],
    [
        'nome' => 'Maria',
        'idade' => 22,
        'curso' => 'Medicina',
        'sexualidade' => 'Feminino'
    ],
    [
        'nome' => 'Pedro',
        'idade' => 19,
        'curso' => 'Direito',
        'sexualidade' => 'Masculino'
    ]
];

foreach ($alunos as $aluno) {
    echo "\nNome: " . $aluno['nome'] . "\nIdade: " . $aluno['idade'] . "\nCurso: " . $aluno['curso'] . "\nSexualidade: " . $aluno['sexualidade'];
}
?>