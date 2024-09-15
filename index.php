<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Electrónica</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php include 'include/nabvar.php';
include 'include/header.php';?>

<div class="container-xxl py-5">
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title text-center text-primary text-uppercase"></h6>
        <h1 class="mb-5">Los mejores productos estan acá</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card ">
                <div class="position-relative">
                    <img class="img-fluid" src="img/product1.jpg" alt="">
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">producto 1</h5>
                    </div>
                    <p class="text-body mb-3">Descripción breve del producto 1.</p>
                    <div class="d-flex justify-content-between">
                        <span class="price green-text">$199.99</span>
                        <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="1" data-name="Producto 1" data-price="199.99">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="card">
                <div class="position-relative">
                    <img class="img-fluid" src="img/product2.jpg" alt="">
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">producto 2</h5>
                    </div>
                    <p class="text-body mb-3">Descripción breve del producto 2.</p>
                    <div class="d-flex justify-content-between">
                        <span class="price green-text">$299.99</span>
                        <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="1" data-name="Producto 1" data-price="199.99">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
            <div class="card">
                <div class="position-relative">
                    <img class="img-fluid" src="img/product3.jpg" alt="">
                </div>
                <div class="p-4 mt-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">producto 3</h5>
                    </div>
                    <p class="text-body mb-3">Descripción breve del producto 3.</p>
                    <div class="d-flex justify-content-between">
                        <span class="price green-text">$399.99</span>
                        <button type="button" class="btn btn-sm btn-outline-secondary add-to-cart" data-id="1" data-name="Producto 1" data-price="199.99">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php include 'include/footer.php'?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>