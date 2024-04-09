<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/ranges.js"></script>
    <script defer src="../assets/script/catalogData.js"></script>
    <script defer src="../assets/script/favorite_data.js"></script>
    <script defer src="../assets/script/cart_data.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
      <div class="container-user">

        <!-- Добавление товара -->
        <div class="modal fade" id="addItem" tabindex="-1" aria-labelledby="addItem" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить товар</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" id="addItem" action="../modules/addItem.php" method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="name" class="form-label">Название</label>
    <input type="text" name="name" class="form-control" id="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="article" class="form-label">Артикул</label>
    <input type="text" name="article" class="form-control" id="article" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="img" class="form-label">Изображения</label>
    <input 
      type="file" 
      multiple 
      accept="image/*" 
      name="img[]" 
      class="form-control" 
      id="img" 
      required
    >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="desc" class="form-label">Описание</label>
    <input type="text" name="desc" class="form-control" id="desc" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="subdesc" class="form-label">Краткое описание</label>
    <input type="text" name="subdesc" class="form-control" id="subdesc" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="purpose" class="form-label">Назначение</label>
    <input type="text" name="purpose" class="form-control" id="purpose" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="count" class="form-label">Количество</label>
    <input type="number" name="count" class="form-control" id="count" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="price" class="form-label">Цена</label>
    <input type="number" name="price" class="form-control" id="price" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="density" class="form-label">Плотность</label>
    <input type="number" name="density" class="form-control" id="density" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="acidity" class="form-label">Кислотность</label>
    <input type="number" name="acidity" class="form-control" id="acidity" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="rating" class="form-label">Рейтинг</label>
    <input type="number" name="rating" class="form-control" id="rating" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="country" class="form-label">Регион</label>
    <input type="text" name="country" class="form-control" id="country" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="taste" class="form-label">Вкус</label>
    <input type="text" name="taste" class="form-control" id="taste" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="method" class="form-label">Способ обработки</label>
    <input type="text" name="method" class="form-control" id="method" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="available" class="form-label">Товар доступен</label>
    <select class="form-select" name="available" id="available">
      <option selected disabled hidden>Выбрать категорию</option>
      <option value="1">Да</option>
      <option value="2">Нет</option>
  </select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Категория товара</label>
    <select class="form-select" name="cat" id="validationCustom02">
    <option selected disabled hidden>Выбрать категорию</option>

      <?php include('../modules/db.php');
      $mass = $conn -> query('SELECT * FROM `categories`');
      $conn -> close();
      while($result = $mass -> fetch_assoc()):?>

      <option value="<?= $result['cat_id']; ?>">
      <?= $result['cat_name']; ?>
      </option>


      <?php endwhile; ?>


    </select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Добавить</button>
  </div>
</form>
      </div>
    </div>
  </div>
    </div>
    <!-- Добавление категории -->
        <div class="modal fade" id="addCat" tabindex="-1" aria-labelledby="addCat" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Добавить категорию</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="addCat" action="../modules/addCat.php" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Изображение</label>
          <input type="file" name="img" class="form-control" id="validationCustom01" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Название</label>
          <input type="text" name="name" class="form-control" id="validationCustom01" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Добавить</button>
  </div>
</form>
      </div>
    </div>
  </div>
    </div>

            <section class="catalog">
              <?php if(isset($_COOKIE['role'])): ?>
                <?php if($_COOKIE['role'] == 1): ?>
              <div class="admin-btn row d-flex justify-content-center">
                <div class="col-5 col-sm-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                  Добавить товар
                </button>
                </div>
                <div class="col-5 col-sm-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCat">
                  Добавить категорию
                </button>
                </div>
                <!-- <div class="col-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                  Удалить товар
                </button> -->
                <!-- </div> -->
                </div>
                <?php endif; ?>
                <?php endif; ?>
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
                  <div class="col-sm-5 col-12 px-0 price d-flex flex-column">
                    <div class="col-sm-9 mx-0">
                      <label for="priceRange" class="form-label sub-header-font">Цена, руб</label>
                      <div class="d-flex mb-2">
                        <input class="form-control me-4" type="number" id="range1" type="text" placeholder="0">
                        <input class="form-control" type="number" id="range2" type="text" placeholder="9999">
                      </div>
                      <div class="container-range">
                          <div class="slider-track"></div>
                          <input type="range" value="0" min="0" max="10000" step="100" id="slider-1" oninput="slideOne()">
                          <input type="range" value="10000" min="0" max="10000" step="100" id="slider-2" oninput="slideTwo()">
                      </div>
                    </div>
                    <div class="col-12 col-sm-10 px-0 mt-3 d-flex flex-row justify-content-between">
                      <div class="col-5">
                        <select class="form-select"  aria-label="Default select example">
                          <option selected disabled hidden>Сортировка</option>
                          <option value="1">По возрастанию</option>
                          <option value="2">По убыванию</option>
                          <option value="3">Самые популярные</option>
                      </select>
                      </div>
                      <div class="col-5">
                        <select class="form-select"  aria-label="Default select example">
                          <option selected disabled hidden>Вкус кофе</option>
                          <option value="1">По возрастанию</option>
                          <option value="2">По убыванию</option>
                          <option value="3">Самые популярные</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-12 px-0 px-sm-2 d-flex flex-wrap justify-content-between">
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
                  </div>
                </div>
                <div class="row px-0 flex-column">
                  <div class="catalog-categories mt-3 ps-0 row flex-wrap d-flex">
                    <div class="col-auto px-4">
                      Для кофемашины
                    </div>
                    <div class="col-auto px-4">
                      Свежемолотый
                    </div>
                    <div class="col-auto px-4">
                      Для эспрессо
                    </div>
                  </div>
                  <div class="ps-0 mt-3 col-12 d-flex justify-content-between">
                    <div class="col-12 col-sm-4">
                      <button class="clear-btn mb-2 col-12 d-flex align-items-center justify-content-center ps-0 me-sm-2 sub-header-font px-sm-4 text-white bg-black" style="border-radius: 10px">
                        Применить
                      </button>
                      <button class="clear-btn col-12 px-4">
                        Сбросить фильтр
                      </button>
                    </div>
                    <div class="d-none d-sm-block">
                      <?php 
                  include('../modules/db.php');
                  if(isset($_GET['id'])):
                    $param = $_GET['id'];
                    $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param'");
                  else:
                    $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
                  endif;
                  $conn -> close();
                      ?>
                      <p class="sub-header-font">Показано товаров: <span class="number-result underlined"><?= $massItem -> num_rows ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="catalog-items d-flex justify-content-between row mt-4">
                <?php 
                  include('../modules/db.php');
                  if(isset($_GET['id'])):
                    $param = $_GET['id'];
                    $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1 AND `items_category` = '$param'");
                    $imgItem = $conn -> query("SELECT * FROM `items_images`");
                    $allImg = array();
                    while($row = $imgItem->fetch_assoc()) {
                        $allImg[] = $row;
                    }
                  else:
                    $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
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