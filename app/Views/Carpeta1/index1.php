<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/index1.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="text-center p-4 bg-white rounded shadow">
        <h1 class="mb-4">Contador de Clics</h1>
        <div class="d-flex justify-content-center align-items-center">
            <button class="btn btn-danger btn-lg" onclick="decreaseCounter()">-</button>
            <input type="text" id="counter" class="form-control text-center w-25 mx-3" value="10" readonly>
            <button class="btn btn-primary btn-lg" onclick="increaseCounter()">+</button>
        </div>
    </div>
    <script src="public/index1.js"></script> 
</body>
</html>
