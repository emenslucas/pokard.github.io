<!DOCTYPE html>
<html lang="es">
<?php include_once "../php/head.php"; ?>

<body>
    <?php
    include_once "../php/header.php";
    require_once "config.php";
    $db_handle = new DBController();
    ?>
    <section id="cartas">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center mb-4">Cartas</h1>
            <div id="searchMenu" class="row">
                <div class="col-6 col-md-4">
                    <label class="mb-3" for="nombreCarta">Nombre de carta</label>
                    <input type="text" name="nombreCarta" id="nombreCarta" required />
                </div>
                <div class="col-6 col-md-4">
                    <label class="mb-3" for="textoCarta">Texto de carta</label>
                    <input type="text" name="textoCarta" id="textoCarta" required />
                </div>
                <div class="col-12 col-md-4">
                    <label class="mb-3" for="">Tipo de energía</label>
                    <div class="dropdown-center">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Seleccionar tipo de energía</button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Action two</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Action three</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 mt-4 d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                    $array_cartas = $db_handle->runQuery("SELECT * FROM carta ORDER BY id DESC");
                    if (!empty($array_cartas)) {
                        $contador_cartas = 0;
                        foreach ($array_cartas as $clave => $valor) {
                            if ($contador_cartas % 8 == 0) {
                                if ($contador_cartas > 0) {
                                    echo '</div></div>';
                                }
                                if ($contador_cartas == 0) {
                                    echo '<div class="carousel-item active"><div class="row">';
                                } else {
                                    echo '<div class="carousel-item"><div class="row">';
                                }
                            } ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="cardContainer">
                                    <img class="img-fluid" src="../img/<?php echo $array_cartas[$clave]["imagen"]; ?>">
                                    <div class="contenedor">
                                        <div class="price"><?php echo "$" . $array_cartas[$clave]["precio"]; ?></div>
                                        <form action="carrito.php" method="post">
                                            <input type="hidden" name="imagen" value="<?php echo $array_cartas[$clave]["imagen"]; ?>">
                                            <input type="hidden" name="precio" value="<?php echo $array_cartas[$clave]["precio"]; ?>">
                                            <input type="submit" value="Agregar al Carrito" class="btn cartBtn">
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php $contador_cartas++;
                        }
                        if ($contador_cartas % 8 != 0) {
                            echo '</div></div>';
                        }
                    }

                    ?>

                </div>
                <div class="carousel-indicators">
                    <?php
                    $repeticiones = ceil(count($array_cartas) / 8);
                    for ($i = 0; $i < $repeticiones; $i++) {
                       $slide = $i + 1;
                        if($i == 0){
                        echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='$i' class='active' aria-current='true' aria-label='Slide $slide'></button>";
                       }
                       else{
                        echo "<button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='$i' aria-label='Slide $slide'></button>";
                       }
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/navbar.js"></script>
</body>

</html>