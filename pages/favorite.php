<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Избранное</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/card-ranges.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
            <?php 
            $pagetitle = ["Избранное"];
            $pageurl = ["/pages/favorite.php"];
            include ("../modules/breadcrumbs.php"); 
            ?>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="text-start mt-5 h2-title nav-link-font">Избранное</h1>
                <?php
            if(isset($_SESSION['fav']) && !empty($_SESSION['fav'])):
            ?>
                <a href="/modules/clearFav.php" class="clear-btn d-flex align-items-center mb-0 btn sub-header-font">Очистить список</a>
                <?php
            endif;
            ?>
            </div>
          <section class="d-flex row flex-row favorite-section justify-content-between justify-content-lg-start">
            <?php 
            if(isset($_SESSION['fav']) && !empty($_SESSION['fav'])):
              foreach($_SESSION['fav'] as $key => $arrItems){
                  include ("../modules/card.php");
              }
            else:
            ?>
                <div class="d-flex flex-column align-items-center">
              <h2 class="text-center mt-5 mb-2 h2-title nav-link-font">Список избранного пуст</h2>
              <p class="text-center sub-header-font" style="font-size: 18px">Перейдите в каталог</p>
              <a href="/pages/catalog.php" class="text-dark underlined sub-header-font">В каталог</a>
              </div>
            <?php endif; ?>
          </section>
        </div>
    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>