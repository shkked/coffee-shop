<?php
  session_start();
  $pagetitle = ["Каталог"];
  $pageurl = ["/pages/catalog.php"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/ranges.js"></script>
    <script defer src="../assets/script/catalogData.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
      <div class="container-user">
            <section class="catalog">
                <?php include('../modules/breadcrumbs.php');?>
                <h1 class="nav-link-font text-black h2-title text-start">Каталог</h1>
                <div class="why-we row d-flex flex-wrap">
                  <?php 
                  include('../modules/db.php');
                  $mass = $conn -> query('SELECT * FROM `categories`');
                  $conn -> close();
                  while($arr = $mass -> fetch_assoc()):
                  ?>
                <div class="why-we-div col-3 me-2 me-sm-4 mt-2 mt-sm-0">
                  <img src="../assets/icons/<?= $arr['cat_img']; ?>" alt="">
                  <p><?= $arr['cat_name']; ?></p>
                </div>
                <?php endwhile; ?>
                </div>
                <div class="catalog-filters mt-4 row d-flex justify-content-between">
                  <div class="col-12 px-0 price d-flex flex-column">
                    <div class="col-sm-4 mx-0">
                      <label for="priceRange" class="form-label sub-header-font">Цена, руб</label>
                      <div class="d-flex flex-column mb-2">
                        <!-- <form action="../modules/priceFilter.php" class="d-flex flex-column"> -->
                          <div class="d-flex justify-content-between mb-2">
                            <input 
                            class="form-control me-4" 
                            type="number" 
                            id="range1" 
                            type="text" 
                            placeholder="0"
                            required>
                            <input 
                            class="form-control" 
                            type="number" 
                            id="range2" 
                            type="text"
                            placeholder="9999"
                            required>
                          </div>
                          <div class="container-range">
                              <div class="slider-track"></div>
                              <input type="range" value="0" min="0" max="10000" step="100" id="slider-1" oninput="slideOne()">
                              <input type="range" value="10000" min="0" max="10000" step="100" id="slider-2" oninput="slideTwo()">
                      </div>
                      </div>
                      
                    </div>
                    <div class="col-12 px-0 mt-3 d-flex flex-row justify-content-between">
                      <div class="col-4">
                        <select id="sort" class="form-select" aria-label="Default select example">
                          <option selected disabled hidden>Сортировка</option>
                          <option value="1">По возрастанию цены</option>
                          <option value="2">По убыванию цены</option>
                        </select>
                      </div>
                      <div class="d-none d-sm-block">
                      <?php 
                  include('../modules/db.php');
                  if(isset($_GET['id'])):
                    $param = $_GET['id'];
                    if(isset($_GET['sort']) && $_GET['sort'] == 1){
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param' ORDER BY `items_price` ASC");
                    } elseif(isset($_GET['sort']) && $_GET['sort'] == 2) {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param' ORDER BY `items_price` DESC");
                    } else {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param'");
                    };
                  else:
                    if(isset($_GET['sort']) && $_GET['sort'] == 1){
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 ORDER BY `items_price` ASC");
                    } elseif(isset($_GET['sort']) && $_GET['sort'] == 2) {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 ORDER BY `items_price` DESC");
                    } else {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
                    };
                  endif;
                  $conn -> close();
                      ?>
                      <p class="sub-header-font">Показано товаров: <span class="number-result underlined"><?= $massItem -> num_rows ?></span></p>
                    </div>
                    </div>
                  </div>
                  <!-- <div class="col-sm-6 col-12 px-0 px-sm-2 d-flex flex-wrap justify-content-between">
                    <div class="col-5 px-sm-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Плотность</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-5 px-sm-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Кислотность</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-5 px-sm-2">
                      <select class="form-select" aria-label="Default select example">
                              <option selected disabled hidden>Рейтинг</option>
                              <option value="DESC">По убыванию</option>
                              <option value="ASC">По возрастанию</option>
                      </select>
                    </div>
                    <div class="col-5 px-sm-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Страна произрастания</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-5 px-sm-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Способ обработки</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                  </div> -->
                </div>
                <div class="row px-0 flex-column">
                  <!-- <div class="catalog-categories mt-3 ps-0 row flex-wrap d-flex">
                    <div class="col-auto px-4">
                      Для кофемашины
                    </div>
                    <div class="col-auto px-4">
                      Свежемолотый
                    </div>
                    <div class="col-auto px-4">
                      Для эспрессо
                    </div>
                  </div> -->
                  <div class="ps-0 mt-3 col-12 d-flex justify-content-between">
                    <!-- <div class="col-12 col-sm-4">
                      <button class="clear-btn mb-2 col-12 d-flex align-items-center justify-content-center ps-0 me-sm-2 sub-header-font px-sm-4 text-white bg-black" style="border-radius: 10px">
                        Применить
                      </button> -->
                      <!-- <button class="clear-btn col-12 px-4">
                        Сбросить фильтр
                      </button> -->
                    </div>
                  </deiv>
                </div>
                <div class="catalog-items d-flex row justify-content-sm-between justify-content-xl-start  mt-4">
                <?php 
                  include('../modules/db.php');
                  if(isset($_GET['id'])):
                    $param = $_GET['id'];
                    if(isset($_GET['sort']) && $_GET['sort'] == 1){
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param' ORDER BY `items_price` ASC");
                    } elseif(isset($_GET['sort']) && $_GET['sort'] == 2) {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param' ORDER BY `items_price` DESC");
                    } else {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param'");
                    };
                    // $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param'");
                    $imgItem = $conn -> query("SELECT * FROM `items_images`");
                    $allImg = array();
                    while($row = $imgItem->fetch_assoc()) {
                        $allImg[] = $row;
                    }
                  else:
                    if(isset($_GET['sort']) && $_GET['sort'] == 1){
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 ORDER BY `items_price` ASC");
                    } elseif(isset($_GET['sort']) && $_GET['sort'] == 2) {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 ORDER BY `items_price` DESC");
                    } else {
                      $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
                    };
                    // $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
                    $imgItem = $conn -> query("SELECT * FROM `items_images`");
                    $allImg = array();
                    while($row = $imgItem->fetch_assoc()) {
                        $allImg[] = $row;
                    }
                  endif;
                  $conn -> close();
                  while($arrItems = $massItem -> fetch_assoc()):
                    $arrItems['items_img'] = reset(
                      array_filter($allImg, function($item) use ($arrItems) {
                        return $item['item_id'] == $arrItems['items_article'];
                      })
                    )['item_image'];  
                    include('../modules/card.php');
                  endwhile;
                  ?>
                </div>
            </section>
    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>