<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .col {
        flex: 1;
        margin-right: 10px;
    }

    .form {
        border: 1px solid #ccc;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .btn {
        padding: 8px 20px;
        border: none;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .index {

        margin-left: 400px;
    }
</style>

<body style="background-color: wheat;">

        <!--DAMOS VALORES -->
        <?php
        $jugador1casillaAcumulado = 0;
        $jugador2casillaAcumulado = 0;
        $jugador3casillaAcumulado = 0;
        $dado = 0;
        $dado2 = 0;
        $dado3 = 0;
        $filaActual = 0;
        if (isset($_POST['valor'])) {
            $dado = rand(1, 12);
            $dado2 = rand(1, 12);
            $dado3 =  rand(1, 12);
            $valorantiguo = $_POST['valor'];
            $jugador1casillaAcumulado = $valorantiguo + $dado;
            $jugador2casillaAcumulado = $valorantiguo + $dado2;
            $jugador3casillaAcumulado = $valorantiguo + $dado3;
        }

        // SWITCH PARA LOS CASOS

        switch ($jugador1casillaAcumulado) {
            case '4':
                $jugador1casillaAcumulado = 97;
                $mensaje = "USTED CAYO EN LA CASILLA 4 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 97";
                $alerta = 1;
                break;
            case '15':
                $jugador1casillaAcumulado = 54;
                $mensaje = "USTED CAYO EN LA CASILLA 15 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 54";
                $alerta = 1;
                break;

            case '10':
                $jugadorescasillaAcumulado = 28;
                $mensaje = "USTED CAYO EN LA CASILLA 10 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 28";
                $alerta = 1;
                break;
            case '32':
                $jugadorescasillaAcumulado = 69;
                $mensaje = "USTED CAYO EN LA CASILLA 32 POR LO QUE SUBIO POR LA ESCALERA A LA CASILLA 69";
                $alerta = 1;
                break;

                // SERPIENTES

            case '38':
                $jugadorescasillaAcumulado = 3;
                $mensaje = "USTED CAYO EN LA CASILLA 38 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 3";
                $alerta = 1;
                break;
            case '82':
                $jugador1casillaAcumulado = 62;
                $mensaje = "USTED CAYO EN LA CASILLA 82 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 62";
                $alerta = 1;
                break;

            case '98':
                $jugadorescasillaAcumulado = 54;
                $mensaje = "USTED CAYO EN LA CASILLA 98 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 54";
                $alerta = 1;
                break;
            case '89':
                $jugadorescasillaAcumulado = 67;
                $mensaje = "USTED CAYO EN LA CASILLA 89 POR LO QUE BAJO POR LA SERPIENTE A LA CASILLA 67";
                $alerta = 1;
                break;


            default:
                if ($dado > 1) {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                } else {
                    $mensaje = "USTED AVANZO $dado CASILLAS";
                }
                $alerta = 1;
                break;
        }

        ?>
        <!-- PRIMER FORMULARIO, PRIMER JUGADOR -->

        <div class="container">
            <h2>SERPIENTES Y ESCALERAS</h2>
            <div class="row">
                <div class="col">
                    <form action="index.php" method="post" class="form">
                        <div class="form-group">
                            <label for="jugador1">JUGADOR 1</label>
                            <input type="text" id="jugador1" name="jugador1" class="form-control" value="<?php echo isset($_POST['jugador1']) ? $_POST['jugador1'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="acumulado1">ACUMULADO</labe><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="dado1">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                            <imput type="hidden" name="Nojugada">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="TIRAR">
                        </div>
                        <div class="row mt-3">
                            <div class="col-1g-4">
                                <a href="index.php" id="enviar" name="enviar" class="btn btn-secondary">REINICIAR</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- SEGUNDO FORMULARIO, SEGUNDO JUGADOR -->
                <div class="col">
                    <form action="index.php" method="post" class="form">
                        <div class="form-group">
                            <label for="jugador2">JUGADOR 2</label>
                            <input type="text" id="jugador2" name="jugador2" class="form-control" value="<?php echo isset($_POST['jugador2']) ? $_POST['jugador2'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="acumulado2">ACUMULADO</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador2casillaAcumulado ?>" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="dado2">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                            <imput type="hidden" name="Nojugada">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="TIRAR">
                        </div>
                        <div class="row mt-3">
                            <div class="col-1g-4">
                                <a href="index.php" id="enviar" name="enviar" class="btn btn-secondary">REINICIAR</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- TERCER FORMULARIO, TERCER JUGADOR -->

                <div class="col">
                    <form action="index.php" method="post" class="form">
                        <div class="form-group">
                            <label for="jugador3">JUGADOR 3</label>
                            <input type="text" id="jugador3" name="jugador3" class="form-control" value="<?php echo isset($_POST['jugador3']) ? $_POST['jugador3'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="acumulado3">ACUMULADO</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador3casillaAcumulado ?>" required>
                         
                        </div>
                        <div class="form-group">
                            <label for="dado3">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                            <imput type="hidden" name="Nojugada">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="TIRAR">
                        </div>
                        <div class="row mt-3">
                            <div class="col-1g-4">
                                <a href="index.php" id="enviar" name="enviar" class="btn btn-secondary">REINICIAR</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">

                <!-- 5. AQUI SE ENCUENTRA EL MENSAJE CUANDO UNO TIRA EL DADO -->

                <?php
                if ($dado > 0) {

                ?>
                    <div style="color:red; width: 10px;">
                        <?php
                        if ($jugador1casillaAcumulado < 100) {
                        ?>
                            <h1>TIRO</h1>
                            <h2><?= $dado ?></h2>

                            <h2><?= $mensaje ?></h2>
                    </div>
                <?php } else {
                ?>
                    <h1>HAY BUENAS NOTICIAS</h1>
            </div>
    <?php
                        }
                    } ?>
        </div>
        </div>
        </div>

        <!--IMAGENES DEL JUEGO Y EDICION DE COMO PONERLAS -->


        <div class="col-6">
            <!--SERPIENTES -->
            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top:50px; margin-left:500px; position:absolute;
            width:100px; height:200px; transform:rotate(-30deg)">

            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top: 60px; margin-left:800px; position: absolute;
            width:100px; height:200px; transform: rotate(20deg)">

            <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top: 400px; margin-left:400px; position:absolute;
            width:200px; height:200px; transform:rotate(-15deg)">

             <img src="./klipartz.com.png" alt="" style="z-index:2; margin-top: 100px; margin-left:420px; position:absolute;
            width:100px; height:100px; transform:rotate(-15deg)">

            <!-- ESCALERAS -->
            <img src="./escalera.png" alt="" style="z-index:2; margin-top: 210px; margin-left:880px; position: absolute;
            width:100px; height: 200px; transform: rotate(-03deg)">

            <img src="./escalera.png" alt="" style="z-index:2; margin-top: 270px; margin-left:750px; position: absolute;
                width:50px; height:290px; transform: rotate(20deg)">

            <img src="./escalera.png" alt="" style="z-index:2; margin-top: 420px; margin-left:890px; position: absolute;
                width:100px; height:200px; transform: rotate(-50deg)">

            <img src="./escalera.png" alt="" style="z-index:2; margin-top: -30px; margin-left:560px; position: absolute;
                width:90px; height:700px; transform: rotate(00deg)">

            <!-- AQUI SE ENCUENTRA LA FICHA Y SU POSICION -->

            <?php
            if ($jugador1casillaAcumulado == 0) {


            ?>
                <img src="./ficha.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:445px;
                        margin-left:300px; position:absolute;">
                <img src="./fichanegra.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:515px;
                        margin-left:300px; position:absolute;">
                <img src="./fichamorada.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:570px;
                        margin-left:300px; position:absolute;">
            <?php
            }
            ?>
            <!-- 10. LA TABLA, COMO COLOCAR LOS NUMEROS Y LOS COLORES -->

            <table class="index" style="z-index: 1;">
                <?php
                $colores = ['yellow', 'white', 'red', 'blue', 'green'];
                $NoCasilla = 101;
                $coloranterior = '';
                for ($fila = 0; $fila < 10; $fila++) {
                    echo "<tr>";
                    for ($columna = 0; $columna < 10; $columna++) {
                        echo "<td>";
                        $colorquetoca = rand(0, 4);
                        while ($colorquetoca == $coloranterior) {
                            $colorquetoca = rand(0, 4);
                        }
                        $coloranterior = $colorquetoca;
                        // 11. SI LA FILA ES IGUAL A CERO

                        if ($fila > 0) {
                            if ($columna == 0) {
                                $NoCasilla -= 10;
                            } else {
                                if ($fila % 2 == 0) {
                                    $NoCasilla--;
                                } else {
                                    $NoCasilla++;
                                }
                            }
                        } else {
                            $NoCasilla--;
                        }
                        //12. LA FICHA FUNCIONA HASTA QUE SEA MENOR A 101
                        if ($jugador1casillaAcumulado == $NoCasilla && $jugador1casillaAcumulado > 0 && $jugador1casillaAcumulado < 101) {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><img src='./ficha.png' alt='' style='z-index: 2; width: 60px; height: 60px;'></div>";
                        } else {
                            echo "<div class='ficha' style='width: 60px; height: 60px; border: solid; background-color: $colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        </div>

        <!-- 13. ESTE ES EL MODAL PARA MOSTRAR EL RESULTADO -->
        <div class="modal fade" id="resultadoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1 style="color:blue">FELICIDADES GANASTE</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                        <a href="index.php" id="enviar" name="enviar" class="btn btn-secondary">REINICIAR</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php

        // 14. SI CUMPLE LA CONDICION MUESTRA EL MODAL
        if ($jugador1casillaAcumulado >= 100) {
        ?>
            <script>
                var modal = new bootstrap.Modal(document.getElementById('resultadoModal'));
                modal.show();
            </script>
        <?php
        }
        ?>

    </body>

    </html>