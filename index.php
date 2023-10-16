<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground Black</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php include ("./modules/header.php"); ?>
    <main>
      <div class="container">
        <section>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/diplodok.jpeg" class="d-block w-100" alt="Diplodok">
    </div>
    <div class="carousel-item">
      <img src="./assets/img/tirano.jpeg" class="d-block w-100" alt="Tiranozavr">
    </div>
    <div class="carousel-item">
      <img src="./assets/img/pterodaktil.jpeg" class="d-block w-100" alt="Pterodaktil">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </section>
        <section>
          <h2 class="text-center mt-4 mb-4">Самые популярные товары</h2>
          <div class="d-flex flex-row justify-content-between">
                <div class="card" style="width: 18rem;">
      <img src="/php/assets/img/diplodok.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Diplodok</h5>
        <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
        <p class="card-text">Диплодок ок</p>
        <a href="#" class="btn btn-primary">Купить</a>
      </div>
    </div>
                <div class="card" style="width: 18rem;">
      <img src="/php/assets/img/pterodaktil.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pterodaktil</h5>
        <p class="card-text">Птеродактил ок</p>
        <a href="#" class="btn btn-primary">Купить</a>
      </div>
    </div>
                <div class="card" style="width: 18rem;">
      <img src="/php/assets/img/tirano.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tiranozavr</h5>
        <p class="card-text">тирано ок</p>
        <a href="#" class="btn btn-primary">Купить</a>
      </div>
    </div>
                </div>
        </section>


      </div>
    </main>
    <?php include ("./modules/footer.php"); ?>
</body>
</html>