<?php

$password_lenght = isset($_GET['password_lenght']) ? $_GET['password_lenght'] : false;

$types = isset($_GET['types']) ? $_GET['types'] : false;

$no_parameters_alert = "Inserisci un parametro";

function generate_password($lenght, $types)
{
    $password = "";
    $characters = selected_characters($types);

    for ($i = 0; $i < $lenght; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return trim($password, " ");
};

function selected_characters($types)
{
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()";

    $characters_string = "";

    foreach ($types as $type) {

        if ($type == "letters") {
            $characters_string .= $letters;
        } else if ($type == "numbers") {
            $characters_string .= $numbers;
        } else if ($type == "symbols") {
            $characters_string .= $symbols;
        } else {
            $characters_string;
        }
    }

    return $characters_string;
}