// Inicialización del contador
let counterValue = 10;

// Función para disminuir el contador
function decreaseCounter() {
    if (counterValue > 0) {
        counterValue--;
        document.getElementById("counter").value = counterValue;
    }
}

// Función para aumentar el contador
function increaseCounter() {
    if (counterValue < 20) {
        counterValue++;
        document.getElementById("counter").value = counterValue;
    }
    // Redirección al formulario Index2 cuando el contador llega a 20
    if (counterValue === 20) {
        window.location.href = "/Parcial2DW/Index2-CFormF1"; // URL de redireccionamiento a index2
    }
}
