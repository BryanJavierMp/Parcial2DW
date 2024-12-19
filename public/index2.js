function convertCurrency() { 
    const amount = parseFloat(document.getElementById("amount").value);
    const fromCurrency = document.getElementById("fromCurrency").value;
    const toCurrency = document.getElementById("toCurrency").value;
    const resultElement = document.getElementById("result");

    // Validaciones
    if (amount < 0) {
        alert("No se permiten valores negativos.");
        return false;
    }
    if (fromCurrency === toCurrency) {
        alert("No se puede convertir entre la misma moneda.");
        return false;
    }

    // Conversión
    let conversionRate = 0;
    if (fromCurrency === "USD" && toCurrency === "EURO") {
        conversionRate = 0.93;
    } else if (fromCurrency === "EURO" && toCurrency === "USD") {
        conversionRate = 1.08;
    }

    const convertedAmount = amount * conversionRate;
    resultElement.textContent = `${amount} ${fromCurrency} = ${convertedAmount.toFixed(2)} ${toCurrency}`;

    // Redirección si el valor convertido es mayor o igual a 500
    if (convertedAmount >= 500) {
        window.location.href = "http://localhost:8081/Parcial2DW/Index3-CResultadoF1"; // Asegúrate de usar la URL completa
    }

    return false; // Prevenir el envío del formulario
}
