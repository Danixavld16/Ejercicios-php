<?php

$saldo = 3000;
function consultarSaldo() {
    global $saldo;
    echo "Su saldo actual es: $saldo \n";
}

function consignarDinero() {
    global $saldo;
    echo "Ingrese la cantidad a consignar: ";
    $cantidad = readline();
    $saldo += $cantidad;
    echo "Se han consignado $cantidad .Su nuevo saldo es: $saldo \n";
}

function retirarDinero() {
    global $saldo;
    echo "Ingrese la cantidad  que quiera retirar: ";
    $cantidad = readline();
    if ($cantidad > $saldo) {
        echo "Lo siento, no tiene suficiente saldo para retirar esa cantidad.\n";
    } else {
        $saldo -= $cantidad;
        echo "Se han retirado $cantidad Su nuevo saldo es: $saldo \n";
    }
}

while (true) {
    echo "\nSeleccione una opción:\n";
    echo "1. Consultar saldo\n";
    echo "2. Consignar dinero\n";
    echo "3. Retirar dinero\n";

    $opcion = readline();

    switch ($opcion) {
        case 1:
            consultarSaldo();
            break;
            case 2:
                consignarDinero();
                break;
            case 3:
                retirarDinero();
                break;
            default:
                echo "la opción no es valida. Intente de nuevo.\n";
        }
    }
    ?>
    
