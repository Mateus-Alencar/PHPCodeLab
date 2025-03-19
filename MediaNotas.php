<?php
function validaNota($nota) {
    if ($nota < 0 || $nota > 10) {
        return false; 
    }
    return true; 
}

// Função para calcular a média e classificar o aluno
function calculaMedia($notas) {
    foreach ($notas as $nota) {
        if (!validaNota($nota)) {
            return "Erro: Uma ou mais notas são inválidas. As notas devem ser entre 0 e 10.";
        }
    }

    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $resultado = "Aprovado";
    } elseif ($media >= 5) {
        $resultado = "Recuperação";
    } else {
        $resultado = "Reprovado";
    }

    return "Média: " . number_format($media, 2) . " - Resultado: " . $resultado;
}

$notasMateus = [4.5, 6.7, 4.0, 7.3];
$notasLucas = [5,7,6,8,9,10,6];
$notasAna = [12,2,3,4,82];

echo calculaMedia($notasMateus);
echo calculaMedia($notasLucas);
echo calculaMedia($notasAna);

?>
