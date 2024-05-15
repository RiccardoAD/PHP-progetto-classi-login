<?php

include __DIR__ . '/db.php';


?>
<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>progetto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">

<h1>Login</h1>
<form method="post" action="">
    <div class="mb-3">
       <h1> utente :admin  pw :11</h1>
        <label for="utente" class="form-label">Utente</label>
        <input type="text" class="form-control" name="utente" id="utente" aria-describedby="utente">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
