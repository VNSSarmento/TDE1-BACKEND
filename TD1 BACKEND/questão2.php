<?php

$max_aluno = 12;
$turma = 55;
$viagens = 0;

while($turma > 0){
    $alunos_por_viagem = min($turma , $max_aluno - 1);
    $turma -= $alunos_por_viagem;
    $viagens++;
}

echo $viagens;
?>