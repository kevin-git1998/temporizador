<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer de Equipos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Cambiado aquí -->
</head>
<body>

    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Contenido -->
    <div class="container my-4">
        <h1 class="text-center">Tiempos</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="Equipo 1">
                    <div class="card-body">
                        <h5 class="card-title">Equipo 1</h5>
                        <p class="card-text">Descripción del equipo 1.</p>
                        <a href="timer.php" class="btn btn-primary">Usar Temporizador</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="Equipo 2">
                    <div class="card-body">
                        <h5 class="card-title">Equipo 2</h5>
                        <p class="card-text">Descripción del equipo 2.</p>
                        <a href="stopwatch.php" class="btn btn-primary">Usar Cronómetro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Personaliza tu experiencia -->
    <div>
        <h2>Personaliza tu experiencia</h2>
        <label for="bgColor">Color de fondo:</label>
        <input type="color" id="bgColor" value="#ffffff">
        
        <label for="bgImage">Imagen de fondo:</label>
        <input type="file" id="bgImage" accept="image/*">

        <button id="saveSettings">Guardar Cambios</button>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="script.js"></script>
</body>
</html>
