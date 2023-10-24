<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <?php include("../modules/links.php") ?>
    <link rel="stylesheet" href="../style/style.css">
    <script defer src="../assets/script/script.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">

        <!-- Добавление товара -->
        <div class="modal fade" id="addItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
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
    <label for="validationCustom02" class="form-label">Количество</label>
    <input type="text" name="count" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Цена</label>
    <input type="text" name="price" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Товар доступен</label>
    <select class="form-select" name="available" id="validationCustom02">
    <option>Выбрать категорию</option>
    <option value="true">Да</option>
    <option value="false">Нет</option>
  </select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Категория</label>
    <select class="form-select" name="category" id="validationCustom02">
    <option>Выбрать категорию</option>

  <?php include('../modules/db.php');
  $mass = $conn -> query('SELECT * FROM `categories`');
  while($result = $mass -> fetch_assoc()):?>

  <option value="<?= $result['id']; ?>">
  <?= $result['name']; ?>
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

            <section class="catalog">
                <h1 class="nav-link-font">Каталог товаров</h1>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>