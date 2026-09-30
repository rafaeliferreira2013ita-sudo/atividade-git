<?php
if (isset($_POST['num1']) and isset($_POST['num2']) and isset($_POST['calculo'])) {
    
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $calculo = $_POST['calculo'];
    $resultado = 0;
    $simbolo = '';

    if ($calculo == 'soma') {
        $resultado = $num1 + $num2;
        $simbolo = '+';
    } elseif ($calculo == 'subtracao') {
        $resultado = $num1 - $num2;
        $simbolo = '-';
    } elseif ($calculo == 'multiplicacao') {
        $resultado = $num1 * $num2;
        $simbolo = '×';
    } elseif ($calculo == 'divisao') {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            $simbolo = '÷';
        } else {
            echo "Erro: Divisão por zero!";
            exit;
        }
    }

    echo "$num1  $simbolo  $num2 = $resultado";
} else {
    echo "Dados incompletos.";
}
?>