<?php

$password_lenght = $_GET['password_lenght'] ?? false;

$types = $_GET['types'] ?? false;

$repeat = $_GET['repeat'] ?? "0";

$no_parameters_alert = "Inserisci i parametri";

function generate_password($lenght, $types, $repeat)
{
    $password = "";
    $characters = selected_characters($types);

    while (strlen($password) < $lenght) {
        $index = rand(0, strlen($characters) - 1);
        $random_character = $characters[$index];

        if ($repeat) {
            $password .= $random_character;
        } else {
            if (!str_contains($password, $random_character)) {
                $password .= $random_character;
            }
        }
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