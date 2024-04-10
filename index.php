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
        <section class="d-flex flex-column flex-sm-row justify-content-between">
          <div class="info-left row col-12 mb-3 d-flex align-items-center justify-content-center">
            <div class="container-user px-0 mx-0 row w-100 col-12 d-flex flex-row align-items-center justify-content-center">
            <div class="d-flex order-sm-first pt-0 pt-sm-5 col-sm-6 col-12 flex-column align-items-start ps-8 p-5">
                <p class="nav-link-font" style="font-size: 34px;">
                  Начни день с любимого 
                <span style="font-style: italic">эспрессо</span>
                </p>
                <p class="amiko-font w-75" style="font-size: 13px">
                 Плотный кофе со вкусом жареных орехов, печенья и нуги
                </p>
                <a href="/pages/catalog.php" class="my-btn btn py-0 text-center sub-header-font d-flex align-items-center justify-content-center">Купить</a>
              </div>
              <div class="info-right order-first col-sm-5 col-12 d-flex justify-content-center align-items-center">
                <div class="rounded p-4">
                  <img class="p-2" src="/assets/img/espresso-main.webp" alt="espresso">
                </div>
            </div>
            </div>
          </div>
        </section>
        <div class="container-user">
        <section class="articles-section">
          <div class="d-flex flex-row justify-content-between align-items-center ">
            <h2 class="d-none d-sm-block h2-title nav-link-font">Последние статьи</h2>
            <a href="/pages/articles.php" class="d-sm-none h2-title nav-link-font">Последние статьи</a>
            <a href="/pages/articles.php" class="d-none d-sm-block text-dark underlined sub-header-font">Посмотреть все</a>
          </div>
          <div class="d-flex flex-row row justify-content-between align-items-center">
          <?php 
                    include('./modules/db.php');
                    $sql = "SELECT articles.*, users.* FROM articles JOIN users ON articles.articles_author = users.users_id LIMIT 3";
                    $result = $conn -> query($sql);
                    $conn -> close();
                    while($row = $result->fetch_assoc()):
                      include('./modules/article-item.php');
                    endwhile;
                    ?>
          </div>
        </section>
        <section style="margin-bottom: 140px">
          <div class="d-flex flex-row justify-content-between align-items-center">
            <h2 class="d-sm-block d-none h2-title nav-link-font">Часто покупают</h2>
            <a href="/pages/catalog.php" class="d-sm-none h2-title nav-link-font">Часто покупают</a>
            <a href="/pages/catalog.php" class="d-none d-sm-block text-dark underlined sub-header-font">Посмотреть все</a>
          </div>
          <div class="d-flex flex-row row justify-content-between align-items-center">
         <?php
              include('./modules/db.php');
              $massItem = $conn -> query("SELECT * FROM `items` LIMIT 3");
              $imgItem = $conn -> query("SELECT * FROM `items_images`");
              $allImg = array();
              while($row = $imgItem->fetch_assoc()) {
                  $allImg[] = $row;
              }
              $conn -> close();
              while ($arrItems = $massItem->fetch_assoc()):
                $arrItems['items_img'] = reset(
                  array_filter($allImg, function($item) use ($arrItems) {
                    return $item['item_id'] == $arrItems['items_article'];
                  })
                )['item_image'];            
                include('./modules/card.php');
              endwhile;
              ?>
          </div>
        </section>

      </div>
    </main>
    <?php include ("./modules/footer.php"); ?>
    <script>

function toArticle(id) {
  window.location.href = "/pages/articles.php?id=" + id;
}
    </script>
</body>
</html>