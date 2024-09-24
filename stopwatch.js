let stopwatchInterval;
let stopwatchTime = 0;

const stopwatchDisplay = document.getElementById('stopwatchDisplay');
const startStopwatchBtn = document.getElementById('startStopwatchBtn');
const pauseStopwatchBtn = document.getElementById('pauseStopwatchBtn');
const resetStopwatchBtn = document.getElementById('resetStopwatchBtn');

function updateStopwatchDisplay() {
    let hours = Math.floor(stopwatchTime / 3600);
    let minutes = Math.floor((stopwatchTime % 3600) / 60);
    let seconds = stopwatchTime % 60;
    stopwatchDisplay.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}

startStopwatchBtn.addEventListener('click', function() {
    if (stopwatchInterval) return;  // Evitar iniciar múltiples cronómetros
    stopwatchInterval = setInterval(function() {
        stopwatchTime++;
        updateStopwatchDisplay();
    }, 1000);
});

pauseStopwatchBtn.addEventListener('click', function() {
    clearInterval(stopwatchInterval);
    stopwatchInterval = null;  // Detener el cronómetro
});

resetStopwatchBtn.addEventListener('click', function() {
    clearInterval(stopwatchInterval);
    stopwatchInterval = null;
    stopwatchTime = 0;
    updateStopwatchDisplay();
});