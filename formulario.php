<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body style="background-color: wheat;">
    <div class="container" style="text-align:center; color:black;">

        <h1>COMENZAMOS!!</h1>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-1g-5 mt-8">

                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="jugador1">JUGADOR 1</label>
                                <input type="text" class="form-control" id="jugador1" name="jugador1" placeholder="JUGADOR 1" value="<?php echo isset($_SESSION['nombre_jugador']) ? $_SESSION['nombre_jugador'] : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jugador2">JUGADOR 2</label>
                                <input type="text" class="form-control" id="jugador2" name="jugador2" placeholder="JUGADOR 2" value="<?php echo isset($_SESSION['nombre_jugador']) ? $_SESSION['nombre_jugador'] : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jugador3">JUGADOR 3</label>
                                <input type="text" class="form-control" id="jugador3" name="jugador3" placeholder="JUGADOR 3" value="<?php echo isset($_SESSION['nombre_jugador']) ? $_SESSION['nombre_jugador'] : ''; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">COMENZAR</button>
                        </form>
                    </div>
</body>