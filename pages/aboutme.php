<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <?php include("../modules/links.php") ?>
    <!-- <link rel="stylesheet" href="../style/style.css"> -->
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
          <h1 class="text-start mt-5 h2-title nav-link-font">О нас</h1>
            <section class="company-text mt-5">
            <div>
               <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="border-radius: 10px">
    <div class="carousel-item active">
      <img style="border-radius: 10px" src="../assets/img/about1.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img style="border-radius: 10px" src="../assets/img/about2.jpg" class="d-block w-100" alt="img2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
               </div>
            </section>
            <section class="company-text mt-5">
                <div class="d-flex flex-column">
                  <p class="sub-header-font text-black">Ground black - это компания, посвященная искусству кофе. Мы заботимся о каждой стадии кофейного процесса - от сбора самых качественных зерен до тщательного обжаривания и создания уникальных смесей.</p>
                  <p class="sub-header-font text-black" style="font-weight: bold">Наши продукты</p>
                  <ol class="sub-header-font text-black">
                    <li class="mb-3">
                      <span class="text-italic">Элитные Сорта Кофе:</span> Мы предлагаем широкий ассортимент самых изысканных сортов кофе, от зерен высочайшего качества до экзотических местных вкусов.
                    </li>
                    <li class="mb-3">
                      <span class="text-italic">Свежая Обжарка:</span> Наши кофейные зерна обжариваются на месте для достижения максимальной свежести и вкусовых качеств.
                    </li>
                    <li class="mb-3">
                      <span class="text-italic">Уникальные Смеси:</span> Наши эксперты по кофе создают уникальные смеси, объединяя зерна разных происхождений, чтобы дать вам неповторимый вкус каждой чашки.
                    </li>
                    <li class="mb-3">
                      <span class="text-italic">Эко-Дружественные Решения:</span> Мы стремимся к устойчивости и заботе о окружающей среде. Наши упаковки биоразлагаемы и экологически чисты.
                    </li>
                  </ol>
                </div>
            </section>
            <section class="why-we" style="margin-bottom: 140px">
               <h2 class="text-start nav-link-font h2-title">Почему нас выбирают?</h2>
               <div class="d-flex justify-content-between align-center">
                <div class="why-we-div">
                  <img src="../assets/icons/handshake-solid.svg" alt="">
                  <p>Надежность</p>
                </div>
                <div class="why-we-div">
                  <img src="../node_modules/bootstrap-icons/icons/lightning-fill.svg" alt="">
                  <p>Скорость работы</p>
                </div>
                <div class="why-we-div">
                  <img src="../node_modules/bootstrap-icons/icons/patch-check-fill.svg" alt="">
                  <p>Высокий рейтинг</p>
                </div>
                <div class="why-we-div">
                  <img src="../node_modules/bootstrap-icons/icons/telephone-fill.svg" alt="">
                  <p>Гибкость</p>
                </div>
               </div>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>