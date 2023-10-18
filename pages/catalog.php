<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link type="image/x-icon" href="/ground-black/assets/img/logo.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/ground-black/assets/img/logo.ico" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <script defer src="../assets/script/script.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container">

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
            <section>
                <h1 class="mt-5 mb-5">Каталог товаров</h1>
                <?php if(isset($_COOKIE['role'])): ?>
                <?php if($_COOKIE['role'] == '1'): ?>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">Добавить товар</button>
                  <?php endif; ?>
                  <?php endif; ?>
                <div class="d-flex flex-row ">
                  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col-2 filter-panel">
      <div>
        <label for="customRange3" class="form-label">Цена, руб</label>
        <input type="range" class="form-range" min="1000" max="100000" step="500" id="customRange3">
        <input class="form-range" id="price">
        <input class="form-range" id="minPrice">
        <input class="form-range" id="maxPrice">
      <select class="form-select" aria-label="Default select example">
  <option selected>Выбрать категорию</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      <select class="form-select mt-2" aria-label="Default select example">
  <option selected>Выбрать цвет</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      <select class="form-select mt-2" aria-label="Default select example">
  <option selected>Выбрать пол</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<div>
</div>
      </div>
      </div>
      
      <div class="col d-flex flex-row flex-wrap justify-content-between">
        <?php include('../modules/db.php');
          $mass = $conn -> query('SELECT * FROM `items`');
          while($result = $mass -> fetch_assoc()):
          ?>

<div class="card" style="width: 18rem;">
<div class="card-body">
  <h5 class="card-title"><?= $result['name'] ?></h5>
  <img src="../assets/img/<?= $result['img'] ?>" class="card-img-top" alt="<?= $result['name'] ?>">
  <p class="card-text"><?= $result['description'] ?></p>
  <p class="card-text"><?= $result['count'] ?></p>
  <p class="card-text"><?= $result['price'] ?></p>
  <a href="#" class="btn btn-primary">Купить</a>
<?php if(isset($_COOKIE['role'])):
  if($_COOKIE['role'] == 1):
  ?>
      <a href="../modules/removeItem.php?id=<?= $result['id']; ?>">Удалить товар</a>
      <a class="editItem btn btn-primary">Редактировать товар</a>
      <?php 
      endif;
      endif;?>
</div>


  <form class="editInputs" action="../modules/editItem.php?id=<?= $result['id']; ?>" method="POST">
  <input type="text" name="name" value="<?= $result['name']; ?>">
  <input type="text" name="desc" value="<?= $result['description']; ?>">
  <input class="imgItem" type="file" name="img">
  <input type="text" name="count" value="<?= $result['count']; ?>">
  <input type="text" name="price" value="<?= $result['price']; ?>">
    <select class="form-select" name="category" id="validationCustom02">
          <option>Выбрать категорию</option>
          <?php include('../modules/db.php');
                $mass = $conn -> query('SELECT * FROM `categories`');
                while($result = $mass -> fetch_assoc()):
                ?>
      <option value="<?= $result['id']; ?>">
        <?= $result['name']; ?>
      </option>
      <?php endwhile; ?>
  </select>
<button type="submit" class="btn">Редактировать товар</button>
</form>




      </div>
  <?php endwhile; ?>
        </div>
    </div>
  </div>
                </div>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>