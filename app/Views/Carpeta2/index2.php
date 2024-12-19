<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index2</title>    
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="public/index2.css">
</head>
<body>
<div class="container">
        <h2>Conversor de Moneda</h2>
        <form id="conversionForm" onsubmit="return convertCurrency()">
            <!-- Input para la cantidad -->
            <input type="number" id="amount" placeholder="Ingrese la cantidad" required>

            <!-- Selector de moneda inicial -->
            <select id="fromCurrency" required>
                <option value="" disabled selected>Seleccione la moneda inicial</option>
                <option value="USD">USD</option>
                <option value="EURO">EURO</option>
            </select>

            <!-- Selector de moneda destino -->
            <select id="toCurrency" required>
                <option value="" disabled selected>Seleccione la moneda destino</option>
                <option value="USD">USD</option>
                <option value="EURO">EURO</option>
            </select>

            <!-- Botón convertir -->
            <button type="submit">Convertir</button>
        </form>
        <p id="result"></p>
    </div>
    <script src="public/index2.js"></script>
</body>
</html>
