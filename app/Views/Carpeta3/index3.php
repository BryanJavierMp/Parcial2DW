<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres en Raya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/index3.css">
</head>
<body class="bg-light">

    <div class="container">
        <!-- Botones para navegar a otros formularios -->
        <div class="btn-container">
            <button class="btn btn-primary" onclick="redirectToIndex1()">Formulario 1</button>
            <button class="btn btn-secondary" onclick="redirectToIndex2()">Formulario 2</button>
        </div>
        <h2 class="text-center mt-3">TRES EN LÍNEA</h2>
        <!-- Cuadrícula del juego -->
        <div class="board">
            <!-- Inputs para las celdas del juego -->
            <input type="text" id="cell-0" class="form-control" maxlength="1" oninput="playerMove(0)">
            <input type="text" id="cell-1" class="form-control" maxlength="1" oninput="playerMove(1)">
            <input type="text" id="cell-2" class="form-control" maxlength="1" oninput="playerMove(2)">
            <input type="text" id="cell-3" class="form-control" maxlength="1" oninput="playerMove(3)">
            <input type="text" id="cell-4" class="form-control" maxlength="1" oninput="playerMove(4)">
            <input type="text" id="cell-5" class="form-control" maxlength="1" oninput="playerMove(5)">
            <input type="text" id="cell-6" class="form-control" maxlength="1" oninput="playerMove(6)">
            <input type="text" id="cell-7" class="form-control" maxlength="1" oninput="playerMove(7)">
            <input type="text" id="cell-8" class="form-control" maxlength="1" oninput="playerMove(8)">
        </div>

        <!-- Botones para jugar y reiniciar -->
        <div class="btn-container">
            <button class="btn btn-success" onclick="playGame()">Jugar</button>
            <button class="btn btn-danger" onclick="resetGame()">Reiniciar</button>
        </div>

        <!-- Mensaje de resultado -->
        <div id="message"></div>
    </div>

    <script src="public/index3.js"></script> <!-- Enlace al archivo JS -->
</body>
</html>
