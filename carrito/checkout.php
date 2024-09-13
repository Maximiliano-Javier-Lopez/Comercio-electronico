<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pago</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php include '../include/nabvar.php';?>

    <div class="container mt-4">
        <div class="payment-form">
            <h2>Información de Pago</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" id="address" required>
                </div>
                <div class="form-group">
                    <label for="city">Ciudad</label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="form-group">
                    <label for="zip">Código Postal</label>
                    <input type="text" class="form-control" id="zip" required>
                </div>
                <div class="form-group">
                    <label for="card">Número de Tarjeta</label>
                    <input type="text" class="form-control" id="card" required>
                </div>
                <button type="submit" class="btn btn-primary">Pagar</button>
            </form>
        </div>
    </div>

    <?php include '../include/footer.php';?>   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>