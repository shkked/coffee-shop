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
      <form id="addItem" action="../modules/addItem.php" method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Название</label>
    <input type="text" name="name" class="form-control" id="validationCustom01" required>
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
    <label for="validationCustom01" class="form-label">Изображение</label>
    <input type="file" name="img" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Описание</label>
    <input type="text" name="desc" class="form-control" id="validationCustom02" required>
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
    <label for="validationCustom02" class="form-label">Количество</label>
    <input type="number" name="count" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Цена</label>
    <input type="number" name="price" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Плотность</label>
    <input type="number" name="density" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Кислотность</label>
    <input type="number" name="acidity" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Рейтинг</label>
    <input type="number" name="rating" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Регион</label>
    <input type="text" name="country" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Вкус</label>
    <input type="text" name="taste" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Способ обработки</label>
    <input type="text" name="method" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Товар доступен</label>
    <select class="form-select" name="available" id="validationCustom02">
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
      <form id="addItem" action="../modules/addCat.php" method="POST" class="row g-3 needs-validation" novalidate>
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
    <!-- Удаление -->
        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Удаление</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="addItem" action="../modules/addCat.php" method="POST" class="row g-3 needs-validation" novalidate>
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
                <div class="col-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                  Добавить товар
                </button>
                </div>
                <div class="col-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCat">
                  Добавить категорию
                </button>
                </div>
                <div class="col-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">
                  Удалить товар
                </button>
                </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
                <h1 class="nav-link-font text-black h2-title text-start">Каталог</h1>
                <div class="why-we row">
                  <?php 
                  include('../modules/db.php');
                  $mass = $conn -> query('SELECT * FROM `categories`');
                  $conn -> close();
                  while($arr = $mass -> fetch_assoc()):
                  ?>
                <div class="why-we-div col-3 me-4">
                  <img src="../assets/icons/<?= $arr['cat_img']; ?>" alt="">
                  <p><?= $arr['cat_name']; ?></p>
                </div>
                <?php endwhile; ?>
                </div>
                <div class="catalog-filters mt-4 row d-flex justify-content-between">
                  <div class="col-5 ps-0 price d-flex flex-column">
                    <div class="col-9 mx-0">
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
                    <div class="col-10 mt-3 d-flex flex-row justify-content-between">
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
                  <div class="col-6 d-flex flex-wrap">
                    <div class="col-4 px-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Плотность</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-4 px-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Кислотность</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-4 px-2">
                      <select class="form-select" aria-label="Default select example">
                              <option selected disabled hidden>Рейтинг</option>
                              <option value="DESC">По убыванию</option>
                              <option value="ASC">По возрастанию</option>
                      </select>
                    </div>
                    <div class="col-4 px-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Страна произрастания</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                    <div class="col-4 px-2">
                      <select class="form-select"  aria-label="Default select example">
                              <option selected disabled hidden>Способ обработки</option>
                              <option value="<30">Низкая</option>
                              <option value=">30<60">Средняя</option>
                              <option value=">60">Высокая</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row ps-0 flex-column">
                  <div class="catalog-categories mt-3 ps-0 row flex-wrap d-flex">
                    <div class="col-auto px-4">
                      Для кофемашины
                    </div>
                  </div>
                  <div class="ps-0 mt-3 d-flex justify-content-between">
                    <div class="col-4 ps-0">
                      <button class="clear-btn me-2 sub-header-font px-4 text-white bg-black" style="border-radius: 10px">
                        Применить
                      </button>
                      <button class="clear-btn px-4">
                        Сбросить фильтр
                      </button>
                    </div>
                    <div>
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
                  else:
                    $massItem = $conn -> query("SELECT * FROM `items` WHERE `items_available` = 1");
                  endif;
                  $conn -> close();
                  while($arrItems = $massItem -> fetch_assoc()):
                    include('../modules/card.php');
                  endwhile;
                  ?>
                </div>
            </section>
    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>