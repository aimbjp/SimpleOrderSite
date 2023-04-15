<?php

if(!empty($_SESSION['Days']) && !empty($_SESSION['name'])) {
    $file = fopen('../txt_files/' . $_SESSION['name'] . '_' . date('d-m-Y') . '.txt', 'w');
    fwrite($file,
        'Информация о заказе
Имя: ' . $_SESSION['name'] . '
Номер телефона: ' . $_SESSION['phone'] . '
Почта: ' . $_SESSION['email'] . '
Тип путешествия: ' . $arrType[$_SESSION['type']]['name'] . '
Вид питания: ' . $arrEat[$_SESSION['eat']]['name'] . '
Страна: ' . $arrCountryNames[$_SESSION['country']] . '
Кол-во дней: ' . $_SESSION['Days'] . '
Дополнения: ');
    $c = 1;
    for ($i = 0; $i < count($_SESSION['Dops']); $i++) {
        if ($_SESSION['Dops'][$i] != 'true') continue;
        fwrite($file, $c++ . ') ' . $arrDops[$_SESSION['type']]['n' . $i + 1]['name'] . ' ');
    }

    fclose($file);
}
