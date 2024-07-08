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
            <?php 
            $pagetitle = ["О нас"];
            $pageurl = ["/pages/aboutme.php"];
            include ("../modules/breadcrumbs.php"); 
            ?>
          <h1 class="text-start mt-0 mt-lg-5 h2-title nav-link-font">О нас</h1>
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
                      <img style="border-radius: 10px; " src="../assets/img/about1.jpg" class="d-block w-100" alt="img1">
                    </div>
                    <div class="carousel-item">
                      <img style="border-radius: 10px; " src="../assets/img/about2.jpg" class="d-block w-100" alt="img2">
                    </div>
                    <div class="carousel-item">
                      <img style="border-radius: 10px; " src="../assets/img/about4.jpg" class="d-block w-100" alt="img3">
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
            <section class="company-text mt-5">
              <h2 class="text-start nav-link-font h2-title">Всегда в движении</h2>
              <div class="row">
                <div class="col-12 col-lg-6 px-0 movement">
                  <div class="d-flex flex-column bg-white p-5" style="border-radius: 10px">
                    <p class="sub-header-font text-black"><strong>Наш девиз:</strong></p>
                    <p class="sub-header-font text-black slogan underlined">Нельзя стоять на месте</p>
                  </div>
                    <p class="sub-header-font text-black mt-5">Наши сотрудники трудятся постоянно.</p>
                    <p class="sub-header-font text-black">Возможно, пока вы листали наш сайт, мы уже открыли новый вкус, который вам точно понравится!</p>
                </div>
                <div class="col-12 col-lg-6 px-0 px-lg-2">
                    <img style="border-radius: 10px;" class="w-100" src="../assets/img/about3.jpeg" alt="">
                </div>
              </div>
            </section>
            <section class="why-we" style="margin-bottom: 140px">
               <h2 class="text-start nav-link-font h2-title">Почему нас выбирают?</h2>
               <div class="d-flex row justify-content-between align-center">
                <div class="why-we-div col-6 col-sm-3">
                  <img src="../assets/icons/handshake-solid.svg" alt="">
                  <p>Надежность</p>
                </div>
                <div class="why-we-div col-6 col-sm-3">
                  <img src="../node_modules/bootstrap-icons/icons/lightning-fill.svg" alt="">
                  <p>Скорость работы</p>
                </div>
                <div class="why-we-div col-6 col-sm-3 mt-3 mt-md-0">
                  <img src="../node_modules/bootstrap-icons/icons/patch-check-fill.svg" alt="">
                  <p>Высокий рейтинг</p>
                </div>
                <div class="why-we-div col-3 mt-3 mt-md-0">
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