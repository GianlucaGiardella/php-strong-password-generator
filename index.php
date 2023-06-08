<?php include_once __DIR__ . '/logica.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer>
    </script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container pt-5 d-flex flex-column gap-5">
        <h1 class="text-center">Password Generator</h1>

        <form method="get" class="d-flex justify-content-center align-center flex-wrap gap-4">
            <div class="d-flex justify-content-center gap-4">
                <label for="password_lenght">Lunghezza della password</label>
                <input type="number" name="password_lenght" id="password_lenght" min="8" max="16"
                    value="<?= $password_lenght ?>">
            </div>

            <div class="form-check">
                <label class="form-check-label" for="letters">Lettere</label>
                <input class="form-check-input" type="checkbox" name="types[]" value="letters" id="letters"
                    <?= $types && in_array("letters", $types) ? "checked" : "" ?>>
            </div>

            <div class="form-check">
                <label class="form-check-label" for="numbers">Numeri</label>
                <input class="form-check-input" type="checkbox" name="types[]" value="numbers" id="numbers"
                    <?= $types && in_array("numbers", $types) ? "checked" : "" ?>>
            </div>

            <div class="form-check">
                <label class="form-check-label" for="symbols">Simboli</label>
                <input class="form-check-input" type="checkbox" name="types[]" value="symbols" id="symbols"
                    <?= $types && in_array("symbols", $types) ? "checked" : "" ?>>
            </div>

            <button type="submit" class="btn btn-primary">Genera</button>
            <a href="/php-strong-password-generator" class="btn btn-secondary">Annulla</a>
        </form>

        <h2 class="text-center">
            <?= $password_lenght && $types ? generate_password($password_lenght, $types) : $no_parameters_alert ?>
        </h2>
    </div>
</body>

</html>