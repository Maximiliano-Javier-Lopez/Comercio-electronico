<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Electrónica</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>

<div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/product1.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">Descripción breve del producto 1.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$199.99</span>
                            <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="1" data-name="Producto 1" data-price="199.99">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/product2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Descripción breve del producto 2.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$299.99</span>
                            <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="2" data-name="Producto 2" data-price="299.99">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/product3.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Descripción breve del producto 3.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$399.99</span>
                            <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="3" data-name="Producto 3" data-price="399.99">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>