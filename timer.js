let timer;
let timeRemaining;
const timeInput = document.getElementById('timeInput');
const timerDisplay = document.getElementById('timerDisplay');
const startBtn = document.getElementById('startBtn');
const pauseBtn = document.getElementById('pauseBtn');
const resetBtn = document.getElementById('resetBtn');

function updateDisplay() {
    let hours = Math.floor(timeRemaining / 3600);
    let minutes = Math.floor((timeRemaining % 3600) / 60);
    let seconds = timeRemaining % 60;
    timerDisplay.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}

startBtn.addEventListener('click', function() {
    if (timer) return;  // Evitar iniciar múltiples temporizadores
    timeRemaining = parseInt(timeInput.value);
    if (isNaN(timeRemaining) || timeRemaining <= 0) {
        alert('Por favor, ingresa un número válido.');
        return;
    }

    updateDisplay();  // Mostrar el tiempo inicial antes de iniciar el temporizador

    timer = setInterval(function() {
        if (timeRemaining > 0) {
            timeRemaining--;
            updateDisplay();
        } else {
            clearInterval(timer);
            timer = null;
            alert('¡Tiempo finalizado!');
        }
    }, 1000);
});

pauseBtn.addEventListener('click', function() {
    clearInterval(timer);
    timer = null;  // Detener el temporizador
});

resetBtn.addEventListener('click', function() {
    clearInterval(timer);
    timer = null;
    timeRemaining = 0;
    updateDisplay();
});

