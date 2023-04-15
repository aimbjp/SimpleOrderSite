<?php
include 'data.php';
$flagOrderDone = false;

session_start();

if(!empty($_POST['days'])) {
    $_SESSION['country'] = $_POST['country'];
    for ($i = 0; $i < 3; $i++) {
        $arrDop[$i] = false;
    }
    if (!empty($_POST['n1'])) $arrDop[0] = true;
    if (!empty($_POST['n2'])) $arrDop[1] = true;
    if (!empty($_POST['n3'])) $arrDop[2] = true;
    $_SESSION['Dops'] = $arrDop;
    $_SESSION['Days'] = $_POST['days'];
    $flagOrderDone = true;


//формирование цен
    $fullCost = 0;
    $fullCost += $arrType[$_SESSION['type']]['cost'];
    $fullCost += $arrEat[$_SESSION['eat']]['cost'];
    $fullCost += $arrCountry[$arrCountryNames[$_SESSION['country']]];

    for ($i = 0; $i < count($_SESSION['Dops']); $i++){
        $fullCost += ( $_SESSION['Dops'][$i] == 'true' ? $arrDops[$_SESSION['type']]['n'. $i + 1]['cost'] : 0);
    }
    $_SESSION['cost'] = $fullCost;
}

if(empty($_POST) && !empty($_SESSION['Days']) && !empty($_SESSION['name']) && $flagShowObj){
    $flagOrderDone = true;

    $flagOrderDone = true;

//формирование цен
    $fullCost = 0;
    $fullCost += $arrType[$_SESSION['type']]['cost'];
    $fullCost += $arrEat[$_SESSION['eat']]['cost'];
    $fullCost += $arrCountry[$arrCountryNames[$_SESSION['country']]];
    for ($i = 0; $i < count($_SESSION['Dops']); $i++){
        $fullCost += ( $_SESSION['Dops'][$i] == 'true' ? $arrDops[$_SESSION['type']]['n'. $i + 1]['cost'] : 0);
    }

    $_SESSION['cost'] = $fullCost;
}



