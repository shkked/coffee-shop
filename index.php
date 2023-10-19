<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground Black</title>
    <link type="image/x-icon" href="/ground-black/assets/img/logo.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/ground-black/assets/img/logo.ico" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="./assets/script/range-bg.js"></script>
</head>
<body>
    <?php include ("./modules/header.php"); ?>
    <main>
      <div class="container-user">
        <section class="d-flex flex-row justify-content-between">
        <div class="info-left d-flex align-items-center justify-content-start">
          <div class="d-flex flex-column align-items-start ps-5" style="width: 70%">
            <p class="nav-link-font" style="font-size: 34px;">Начни день с любимого <span style="font-style: italic">эспрессо</span></p>
            <p class="amiko-font" style="color: Black; font-size: 13px">Плотный кофе со вкусом жареных орехов, печенья и нуги</p>
            <button type="button" class="my-btn btn text-center amiko-font">Купить</button>
          </div>
        </div>
        <div class="info-right d-flex justify-content-center align-items-center">
          <img src="/ground-black/assets/img/espresso-main.png" alt="espresso">
        </div>
        </section>
        <section>
          <h2 class="mt-4 mb-4 h2-title nav-link-font">Часто покупают</h2>
          <div class="d-flex flex-row justify-content-between">
                <div class="card style="width: 18rem;">
                <div class="ps-4 pt-4 pe-4">
                  <div class="d-flex justify-content-center align-items-center p-5" style="background-color: #BCB5A6; border-radius: 10px;">
                    <img src="/ground-black/assets/img/espresso-main.png" class="card-img-top" alt="...">
                    <div class="favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                          <circle cx="17" cy="17" r="17" fill="white"/>
                          <path d="M25.1558 11.094C23.1222 9.4262 20.0979 9.72619 18.2313 11.5797L17.5003 12.3047L16.7692 11.5797C14.9064 9.72619 11.8783 9.4262 9.84476 11.094C7.51433 13.0083 7.39187 16.4439 9.47738 18.5189L16.6579 25.6545C17.1218 26.1152 17.8751 26.1152 18.3389 25.6545L25.5195 18.5189C27.6087 16.4439 27.4862 13.0083 25.1558 11.094Z" fill="black"/>
                    </svg>
                    </div>
                  </div>
                </div>
                <div class="container-card">
                  <div class="card-body">
                      <h6 class="card-subtitle mb-2 text-body-secondary amiko-font">Артикул: 12311</h6>
                      <h5 class="card-title">Эфиопия Иргачефф нат</h5>
                      <p class="card-text">Сладкий кофе с нотами цветов, тёмных ягод, молочного шоколада и грейпфрута</p>
                      <div class="card-ranges">
                      <label for="toxic" class="form-label amiko-font card-subtitle" style="color: #070707;">Кислотность</label>
                        <input type="range" class="form-range range-bg" id="toxic" value="80" disabled>
                      <label for="disabledRange" class="form-label amiko-font card-subtitle" style="color: #070707;">Плотность</label>
                        <input type="range" class="form-range" id="disabledRange" disabled>
                      </div>
                      <a href="#" class="btn btn-primary my-btn">Купить</a>
                  </div>
                </div>
    </div>
        </section>


      </div>
    </main>
    <?php include ("./modules/footer.php"); ?>
</body>
</html>