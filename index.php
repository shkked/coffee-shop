<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground Black</title>
    <?php include("./modules/links.php") ?>
    <script defer src="./assets/script/favorite_data.js"></script>
</head>
<body>
    <?php include ("./modules/header.php"); ?>
    <main>
      <div class="container-user">
        <section class="d-flex flex-row justify-content-between">
        <div class="info-left d-flex align-items-center justify-content-start">
          <div class="d-flex flex-column align-items-start ps-5" style="width: 80%">
            <p class="nav-link-font" style="font-size: 34px;">
            Начни день с любимого 
            <span style="font-style: italic">эспрессо</span>
            </p>
            <p class="amiko-font w-75" style="font-size: 13px">
            Плотный кофе со вкусом жареных орехов, печенья и нуги
            </p>
            <a href="/pages/catalog.php" class="my-btn btn py-0 text-center sub-header-font d-flex align-items-center justify-content-center">Купить</a>
          </div>
        </div>
        <div class="info-right d-flex justify-content-center align-items-center">
          <img src="/assets/img/espresso-main.png" alt="espresso">
        </div>
        </section>
        <section class="articles-section">
          <div class="d-flex flex-row justify-content-between align-items-center ">
            <h2 class="h2-title nav-link-font">Последние статьи</h2>
            <a href="/pages/articles.php" class="text-dark underlined sub-header-font">Посмотреть все</a>
          </div>
          <div class="d-flex flex-row row justify-content-between align-items-center">
          <?php 
                    include('./modules/db.php');
                    $sql = "SELECT articles.*,users.* FROM articles JOIN users ON articles.articles_author = users.users_id LIMIT 3";
                    $result = $conn -> query($sql);
                    $conn -> close();
                    while($row = $result->fetch_assoc()):
                    ?>
                    <a href="/pages/articles.php?id=<?= $row['articles_id'] ?>" style="text-decoration: none !important">
                      <div class="d-flex flex-column article-card col-lg-4 col-12 col-md-5">
                                      <div class="article-img">
                                          <img src="/assets/img/<?= $row['articles_img'] ?>" alt="ar-img">
                                      </div>
                                      <div class="p-4 article-body">
                                          <p style="font-weight: bold; font-size: 20px; word-break: break-word" class="amiko-font text-black"><?= $row['articles_name'] ?></p>
                                          <div class="user d-flex flex-row">
                                              <div style="border-radius: 60px; width: 18px; height: 18px; background-color: #BCB5A6"></div>
                                              <p class="ms-2 amiko-font text-black mb-0"><?= $row['users_name'] ?></p>
                                          </div>
                                      </div>
                      </div>
                  </a>
            <?php 
                    endwhile;
                    ?>
          </div>
        </section>
        <section style="margin-bottom: 140px">
          <div class="d-flex flex-row justify-content-between align-items-center">
            <h2 class="h2-title nav-link-font">Часто покупают</h2>
            <a href="/pages/catalog.php" class="text-dark underlined sub-header-font">Посмотреть все</a>
          </div>
          <div class="d-flex flex-row row justify-content-between align-items-center">
         <?php
              include('./modules/db.php');
              $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 LIMIT 3");
              $conn -> close();
              while($arrItems = $massItem -> fetch_assoc()):
                include('./modules/card.php');
              endwhile;
              ?>
          </div>
        </section>

      </div>
    </main>
    <?php include ("./modules/footer.php"); ?>
</body>
</html>