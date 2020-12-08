<?php

if(isset($_POST['submit'])){
    $val1 = $_POST["val1"];
    $val2 = $_POST["val2"];
    $operation = $_POST['operation'];
}

if(!$operation || (!$val1 && $val1 != '0') || (!$val2 && $val2 != '0')) {
    $error_result = 'Не все поля заполнены';
}
else {
    if(!is_numeric($val1) || !is_numeric($val2)) {
        $error_result = " должны быть числа";
    }
    else
        switch($operation){
            case 'plus':
                $result = $val1 + $val2;
                break;
            case 'minus':
                $result = $val1 - $val2;
                break;
            case 'multiply':
                $result = $val1 * $val2;
                break;
            case 'divide':
                if( $val2 == '0')
                    $error_result = "На ноль делить нельзя!";
                else
                    $result = $val1 / $val2;
                break;
        }
}
if(isset($error_result)) {
    echo "Ошибка: $error_result";
}
else {
    echo "Ответ: $result";
}