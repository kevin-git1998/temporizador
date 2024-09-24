<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporizador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container my-4">
        <h1 class="text-center">Temporizador</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <input type="number" class="form-control" id="timeInput" placeholder="Establecer tiempo en segundos">
                <div class="mt-3 text-center">
                    <button class="btn btn-success" id="startBtn">Iniciar</button>
                    <button class="btn btn-warning" id="pauseBtn">Pausar</button>
                    <button class="btn btn-danger" id="resetBtn">Reiniciar</button>
                </div>
                <h2 class="text-center mt-4" id="timerDisplay">00:00:00</h2>
            </div>
        </div>
    </div>

    <script src="timer.js"></script>
</body>
</html>

