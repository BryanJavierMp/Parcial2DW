let currentPlayer = 'X'; // El jugador siempre empieza con 'X'
let board = Array(9).fill(null); // Representa el estado del tablero
let gameOver = false;

// Función para redirigir a formulario 1
function redirectToIndex1() {
    window.location.href = "/Parcial2DW/Index1-CVistaF1"; // URL absoluta
}

// Función para redirigir a formulario 2
function redirectToIndex2() {
    window.location.href = "/Parcial2DW/Index2-CFormF1"; // URL absoluta
}

// Función que gestiona el movimiento del jugador
function playerMove(index) {
    if (gameOver) return;

    let input = document.getElementById(`cell-${index}`);
    if (input.value !== 'X' && input.value !== 'O') {
        input.value = ''; // Limpiar si el valor no es 'X' ni 'O'
        return;
    }
    // Actualizar el estado del tablero
    board[index] = input.value;
    // Colocar 'O' en un campo vacío si es el turno de la computadora
    if (input.value === 'X') {
        let availableCells = board.map((cell, i) => cell === null ? i : null).filter(i => i !== null);
        if (availableCells.length > 0) {
            let randomIndex = availableCells[Math.floor(Math.random() * availableCells.length)];
            board[randomIndex] = 'O';
            document.getElementById(`cell-${randomIndex}`).value = 'O';
        }
    }
    checkWinner();
}
// Función para verificar si hay un ganador
function checkWinner() {
    const winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Filas
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columnas
        [0, 4, 8], [2, 4, 6] // Diagonales
    ];

    for (const combo of winningCombinations) {
        const [a, b, c] = combo;
        if (board[a] && board[a] === board[b] && board[a] === board[c]) {
            document.getElementById('message').textContent = `${board[a]} GANASTE!`;
            gameOver = true;
            return;
        }
    }
    // Si el tablero está lleno y no hay ganador
    if (!board.includes(null)) {
        document.getElementById('message').textContent = "EMPATE!";
        gameOver = true;
    }
}
// Función para iniciar el juego
function playGame() {
    if (board.includes(null)) {
        document.getElementById('message').textContent = '¡El juego ya está en curso!';
        return;
    }
    resetGame(); // Reiniciar si ya terminó el juego
}
// Función para reiniciar el juego
function resetGame() {
    board = Array(9).fill(null);
    gameOver = false;
    for (let i = 0; i < 9; i++) {
        document.getElementById(`cell-${i}`).value = '';
    }
    document.getElementById('message').textContent = '';
    currentPlayer = 'X';
}
