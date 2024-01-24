<?php
$login = 'Inserisci i tuoi dati';

if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    if (strlen($name) < 3) {
        $login = 'Accesso negato';
    } 
    elseif (!str_contains($email, '.') && !str_contains($email, '@')) {
        $login = 'Accesso negato';
    } 
    elseif (!is_numeric($age)) {
        $login = 'Accesso negato';
    } 
    else {
        $login = 'Accesso riuscito';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="./index.php" method="GET">
        <div class="container my-3">
            <div class="row">
                <div class="col-3">
                    <label for="control-form">Name</label>
                    <input type="text" name="name" placeholder="Inserisci il tuo nome" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="control-form">Mail</label>
                    <input type="text" name="email" placeholder="Inserisci la tua email" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="control-form">Age</label>
                    <input type="text" name="age" placeholder="Inserisci la tua età" class="form-control" required>
                </div>
                <div class="py-3">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <h2>
            <?php echo $login ?>
        </h2>
    </div>
</body>

</html>