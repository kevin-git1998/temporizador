<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronómetro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container my-4">
        <h1 class="text-center">Cronómetro</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mt-4" id="stopwatchDisplay">00:00:00</h2>
                <div class="mt-3 text-center">
                    <button class="btn btn-success" id="startStopwatchBtn">Iniciar</button>
                    <button class="btn btn-warning" id="pauseStopwatchBtn">Pausar</button>
                    <button class="btn btn-danger" id="resetStopwatchBtn">Reiniciar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="stopwatch.js"></script>
</body>
</html>