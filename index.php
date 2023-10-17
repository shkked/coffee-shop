<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground Black</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include ("./modules/header.php"); ?>
    <main>
      <div class="container">
        <section>
        
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