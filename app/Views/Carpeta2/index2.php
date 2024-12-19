<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index2</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/index2.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <h2 class="text-center mb-4">Conversor de Moneda</h2>
        <form id="conversionForm" onsubmit="return convertCurrency()">
            <!-- Input para la cantidad -->
            <div class="mb-3">
                <input type="number" id="amount" class="form-control" placeholder="Ingrese la cantidad" required>
            </div>
            <!-- Selector de moneda inicial -->
            <div class="mb-3">
                <select id="fromCurrency" class="form-select" required>
                    <option value="" disabled selected>Seleccione la moneda inicial</option>
                    <option value="USD">USD</option>
                    <option value="EURO">EURO</option>
                </select>
            </div>
            <!-- Selector de moneda destino -->
            <div class="mb-3">
                <select id="toCurrency" class="form-select" required>
                    <option value="" disabled selected>Seleccione la moneda destino</option>
                    <option value="USD">USD</option>
                    <option value="EURO">EURO</option>
                </select>
            </div>
            <!-- Botón convertir -->
            <button type="submit" class="btn btn-primary w-100">Convertir</button>
        </form>
        <p id="result" class="mt-4 text-center"></p>
    </div>
    <script src="public/index2.js"></script>
</body>
</html>
