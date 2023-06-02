<!DOCTYPE html>
<html lang="es">
  <?php include_once "../php/head.php"; ?>

  <body>
    <?php include_once "../php/header.php"; ?>

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
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Seleccionar tipo de energía
              </button>
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
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="cardContainer">
                    <img src="../img/card1.svg" alt="" />
                    <div class="contenedor">
                      <div class="price">$100</div>
                      <a class="btn cartBtn" href="#" role="button"
                        >Agregar al carrito</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
      integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script src="../js/navbar.js"></script>
  </body>
</html>
