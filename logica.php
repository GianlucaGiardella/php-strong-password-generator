<?php

$password_lenght = isset($_GET['password_lenght']) ? $_GET['password_lenght'] : false;

$no_parameters_alert = "Inserisci un parametro";

function generate_password($lenght)
{
    $password = "";
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    for ($i = 0; $i < $lenght; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return trim($password, " ");
};