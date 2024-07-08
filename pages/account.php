<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <?php include("../modules/links.php") ?>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
        <?php 
                  $pagetitle = ["Личный кабинет"];
                  $pageurl = ["/pages/account.php"];
                  include ("../modules/breadcrumbs.php"); 
                ?>
            <!-- Смена пароля -->
        <div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Смена пароля</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/modules/changePass.php" method="POST" class="row g-3 needs-validation">
        <div class="col-md-4">
            <label for="oldpass" class="form-label">Старый пароль</label>
            <input type="text" name="oldpass" class="form-control" id="oldpass" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="newpass" class="form-label">Новый пароль</label>
            <input type="text" name="newpass" class="form-control" id="newpass" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Изменить</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    </div>
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
      <option selected disabled hidden>Товар доступен</option>
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

            <section class="account-section">
                <h1 class="text-start h2-title nav-link-font mt-0 mt-lg-5">Личный кабинет</h1>
                <?php
                    include("../modules/db.php");
                    $id = $_COOKIE['id'];
                    $result = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$id'");
                    $resultOrder = $conn -> query("SELECT * FROM `orders` WHERE `users_id` = '$id'");
                    $user = $result -> fetch_assoc();
                    $conn -> close();
                    if($user):
                ?>
                <div class="row ms-0 d-flex flex-column flex-sm-row align-center">
                    <div class="col-12 col-sm-4">
                        <div class="d-flex acc-img align-items-center justify-content-center" 
                            style="border-radius: 50%;
                            width: 200px;
                            height: 200px; 
                            background-image: url(/assets/img/<?php
                            if($user['users_img']):
                            echo $user['users_img'];
                                else:
                            echo 'no-img.png';
                                endif;
                            ?>);
                            background-repeat: no-repeat;/
                                background-position: center center;
                                background-color: black;
                                background-size: cover;"
                            >
                            <!-- <img class="w-75 h-75" src="/assets/img/<?= $user['users_img'] ?>" alt="user-img"> -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 px-0 mt-4 mt-sm-0 d-flex flex-column align-center acc-info">
                        <h2 id="h2" class="nav-link-font px-0 text-black text-start"><strong>Ваши данные</strong></h2>
                        <p class="px-0">Ваше имя: <span><?php echo $user['users_name'];?></span></p>
                        <p class="px-0">Ваш номер телефона: <span><?php echo $user['users_tel'];?></span></p>
                        <p class="px-0">Ваш email: <span><?php echo $user['users_email'];?></span></p>
                        <div class="col-lg-4 col-6 px-0 mb-2">
                            <a href="../modules/remove-acc.php?id=<?= $user['users_id'] ?>" class="text-center w-100 text-decoration-none">
                                <button class="my-btn text-center w-100 d-flex justify-content-center" style="background-color: red !important; border: unset !important;" >Удалить аккаунт</button>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6 px-0">
                            <button data-bs-toggle="modal" data-bs-target="#changePass" class="my-btn text-center w-100 d-flex justify-content-center">Изменить пароль</button>
                        </div>
                    </div>
                </div>
                <?php
                else:
                ?>
                <div class="d-flex flex-column align-center acc-info">
                    <p><strong>Ваши данные не найдены!</strong></p>
                </div>
                <?php
                endif;
                ?>
                <!-- Отрисовка заказов -->
                <div class="row px-0 mt-4 d-flex flex-column align-center acc-info">
                <?php
                    if($_COOKIE['role'] && $_COOKIE['role'] == 1):
                    ?>
                        <h2 id="h2" class="nav-link-font px-0 text-black text-start"><strong>Все заказы</strong></h2>
                    <div class="col-12 d-flex flex-row justify-content-between acc-info px-0">
                    <?php
                        include("../modules/db.php");
                        $result = $conn -> query("SELECT * FROM `order-info`");
                        $allorders = array();
                        while($order = $result->fetch_assoc()) {
                            $allorders[] = $order;
                        };
                        if(!empty($allorders)):
                        // var_dump($allorders);
                        $conn -> close();
                    ?>
                        <div class="col-12 d-flex flex-column align-items-start acc-info overflow-auto mb-5 mb-5"
                            style="border-radius: 10px">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <?php 
                                        $namesOrder = 
                                        ["Номер заказа", 
                                        "Состав заказа", 
                                        "Стоимость", 
                                        "ФИО", 
                                        "Электронная почта", 
                                        "Телефон", 
                                        "Адрес доставки", 
                                        "Способ доставки", 
                                        "Способ оплаты", 
                                        "Статус заказа", 
                                        "Дата заказа", 
                                        "Пользователь"];
                                        foreach($namesOrder AS $value):
                                        ?>
                                <th scope="col"><?= $value ?></th>
                                <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($allorders as $ord_info):
                                ?>
                                <tr>
                                    <?php 
                                    foreach($ord_info AS $key => $cell):
                                      if($key == "order_info"):?>
                                      <td >
                                      <div class="d-flex w-100 acc-images">
                                      <?php
                                              $order_info = json_decode($cell, true);
                                              foreach($order_info AS $index => $items):
                                                  $countItemOrder = array_values($items)[0];
                                                  foreach(array_keys($items) AS $item => $value):
                                                    // var_dump($value);
                                                    include("../modules/db.php");
                                                    $item_order = $conn -> query("SELECT * FROM `items`  WHERE `items_article` = '$value' ");
                                                    $item_order = $item_order -> fetch_assoc();
                                                    $img_order = $conn -> query("SELECT * FROM `items_images` WHERE `item_id` = '$value' ");
                                                    $img_order = $img_order -> fetch_assoc();
                                                    $conn -> close();
                                                    $item_info = array_merge($item_order, $img_order);
                                              ?>
                                              <div class="d-flex flex-column align-items-center justify-content-center">
                                                <img src="../assets/img/<?= $item_info['item_image'] ?>" alt="">
                                                <p class="text-center amiko-font" style="height: 60px"><?= $item_info['items_name'] ?></p>
                                                <p class="text-center amiko-font">Количество: <?= $countItemOrder ?> </p>
                                              </div>
                                            <?php
                                            endforeach;
                                            endforeach;
                                            ?>
                                        </div>
                                      </td>
                                    <?php 
                                    continue;
                                    endif;
                                    
                                    if($key == "order_status"):
                                    ?>
                                    <td class="text-center">
                                      <form action="../modules/editStatus.php?id=<?= $ord_info['order_id'] ?>" method="POST">
                                        <select <?php echo $cell == 1 ? '' : 'disabled' ?> class="form-select" name="order_status" id="order_status" style="width: 150px">
                                            <!-- <option selected disabled hidden>Выбрать статус</option> -->

                                            <?php 
                                            include('../modules/db.php');
                                            $statuses = $conn -> query('SELECT * FROM `status`');
                                            $conn -> close();
                                            foreach($statuses AS $status):?>

                                            <option <?php echo $cell == $status['id'] ? 'selected' : '' ?> value="<?= $status['id']; ?>">
                                                <?= $status['name']; ?>
                                            </option>


                                            <?php endforeach; ?>


                                        </select>
                                        <?php if($cell == 1): ?>
                                        <button class="w-100 btn mt-3" type="submit">Изменить</button>
                                        <?php endif; ?>
                                      </form>
                                    </td>
                                    <?php
                                    continue;
                                    endif;

                                    if($key == "order_user"):
                                      include("../modules/db.php");
                                      $orduser = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$cell'");
                                      $orduser = $orduser -> fetch_assoc();
                                      $conn -> close();
                                      $cell = $orduser['users_name'];
                                    ?>
                                    <td class="text-center"> 
                                      <input class="form-control" type="text" disabled value="<?= $cell ?>">
                                    </td>
                                    <?php 
                                    continue;
                                    endif;
                                    if($key == "order_price"):
                                    ?>
                                    <td class="text-center">
                                    <p class="amiko-font mb-0" style="width: 150px"><?= $cell ?> ₽</p>
                                    </td>
                                    <?php 
                                    continue;
                                    endif;
                                    ?>
                                    <td class="text-center">
                                      <p class="amiko-font mb-0" style="width: 150px"><?= $cell ?></p>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    <?php
                    else:
                      ?>
                      <p class="px-0 amiko-font">Заказы не найдены</p>
                      <?php
                    endif;
                    ?>
                    </div>
                    <?php
                    elseif($_COOKIE['role'] && $_COOKIE['role'] !== 1):
                    ?>
                    <h2 id="h2" class="nav-link-font px-0 text-black text-start"><strong>Ваши заказы</strong></h2>
                    <div class="col-12 d-flex flex-row justify-content-between acc-info px-0">
                    <?php
                        include("../modules/db.php");
                        $id = $_COOKIE['id'];
                        $result = $conn -> query("SELECT * FROM `order-info` WHERE `order_user` = '$id'");

                        $allorders = array();
                        while($order = $result->fetch_assoc()) {
                            $allorders[] = $order;
                        };
                        if(!empty($allorders)):
                        $conn -> close();
                    ?>
                        <div class="col-12 d-flex flex-column align-items-start acc-info overflow-auto mb-5 mb-5"
                            style="border-radius: 10px">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <?php 
                                        $namesOrder = 
                                        ["Номер заказа", 
                                        "Состав заказа", 
                                        "Стоимость", 
                                        "ФИО", 
                                        "Электронная почта", 
                                        "Телефон", 
                                        "Адрес доставки", 
                                        "Способ доставки", 
                                        "Способ оплаты", 
                                        "Статус заказа", 
                                        "Дата заказа", 
                                        "Пользователь"];
                                        foreach($namesOrder AS $value):
                                        ?>
                                <th scope="col"><?= $value ?></th>
                                <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($allorders as $ord_info):
                                ?>
                                <tr>
                                    <?php 
                                    foreach($ord_info AS $key => $cell):
                                      if($key == "order_info"):?>
                                      <td>
                                      <div class="d-flex w-100 acc-images">
                                      <?php
                                              $order_info = json_decode($cell, true);
                                              foreach($order_info AS $index => $items):
                                                  $countItemOrder = array_values($items)[0];
                                                  foreach(array_keys($items) AS $item => $value):
                                                    // var_dump($value);
                                                    include("../modules/db.php");
                                                    $item_order = $conn -> query("SELECT * FROM `items`  WHERE `items_article` = '$value' ");
                                                    $item_order = $item_order -> fetch_assoc();
                                                    $img_order = $conn -> query("SELECT * FROM `items_images` WHERE `item_id` = '$value' ");
                                                    $img_order = $img_order -> fetch_assoc();
                                                    $conn -> close();
                                                    $item_info = array_merge($item_order, $img_order);
                                              ?>
                                              <div class="d-flex flex-column align-items-center justify-content-center">
                                                <img src="../assets/img/<?= $item_info['item_image'] ?>" alt="">
                                                <p class="text-center amiko-font"><?= $item_info['items_name'] ?></p>
                                                <p class="text-center amiko-font">Количество: <?= $countItemOrder ?> </p>
                                              </div>
                                            <?php
                                            endforeach;
                                            endforeach;
                                            ?>
                                        </div>
                                      </td>
                                    <?php 
                                    continue;
                                    endif;
                                    
                                    if($key == "order_status"):
                                    ?>
                                    <td class="text-center">
                                        <select disabled class="form-select" id="order_status" style="width: 150px">
                                            <?php 
                                            include('../modules/db.php');
                                            $statuses = $conn -> query("SELECT * FROM `status` WHERE `id` = '$cell'");
                                            $status = $statuses -> fetch_assoc();
                                            $conn -> close();
                                            ?>
                                            <option selected value="<?= $status['id']; ?>">
                                                <?= $status['name']; ?>
                                            </option>
                                        </select>
                                    </td>
                                    <?php
                                    continue;
                                    endif;

                                    if($key == "order_user"):
                                      include("../modules/db.php");
                                      $orduser = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$cell'");
                                      $orduser = $orduser -> fetch_assoc();
                                      $conn -> close();
                                      $cell = $orduser['users_name'];
                                    ?>
                                    <td class="text-center"> 
                                      <input class="form-control" type="text" disabled value="<?= $cell ?>">
                                    </td>
                                    <?php 
                                    continue;
                                    endif;
                                    if($key == "order_price"):
                                    ?>
                                    <td class="text-center">
                                    <p class="amiko-font mb-0" style="width: 150px"><?= $cell ?> ₽</p>
                                    </td>
                                    <?php 
                                    continue;
                                    endif;
                                    ?>
                                    <td class="text-center">
                                      <p class="amiko-font mb-0" style="width: 150px"><?= $cell ?></p>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    <?php
                    else:
                    ?>
                      <p class="px-0 amiko-font">Заказы не найдены</p>
                    <?php
                    endif;
                    ?>

                        <?php 
                        else:
                        ?>
                      <p class="px-0 amiko-font">Заказы не найдены</p>
                    <?php
                    endif;
                    ?>
                </div>
                <?php 
                if($_COOKIE['role'] && $_COOKIE['role'] == 1):
                ?>
                <div class="admin-btn row d-flex justify-content-center">
                <div class="col-6 col-sm-4 d-flex justify-content-center">
                    <button type="button" class="w-100 btn my-btn btn-primary d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addItem">
                    Добавить товар
                  </button>
                </div>
                <div class="col-6 col-sm-4 d-flex justify-content-center">
                    <button type="button" class="w-100 btn my-btn btn-primary d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addCat">
                    Добавить категорию
                  </button>
                </div>
                </div>
                <!-- Все товары -->
                <div class="row px-0 mt-4 d-flex flex-column align-center acc-info">
                    <h2 id="h2" class="nav-link-font px-0 text-black text-start"><strong>Все товары</strong></h2>
                    <div class="col-12 d-flex flex-row justify-content-between acc-info px-0">
                    <?php
                        include("../modules/db.php");
                        $resultItems = $conn -> query("SELECT * FROM `items`");
                        $allitems = array();
                        while($order = $resultItems->fetch_assoc()) {
                            $allitems[] = $order;
                        };

                        $conn -> close();
                    ?>
                        <div class="col-12 d-flex flex-column align-items-start acc-info overflow-auto mb-5"
                        style="border-radius: 10px">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Изображения</th>
                                <th scope="col">Артикул</th>
                                <th scope="col">Название</th>
                                <th scope="col">Описание</th>
                                <th scope="col">Краткое описание</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Количество</th>
                                <th scope="col">Цена</th>
                                <th scope="col">Плотность</th>
                                <th scope="col">Кислотность</th>
                                <th scope="col">Рейтинг</th>
                                <th scope="col">Страна</th>
                                <th scope="col">Вкус</th>
                                <th scope="col">Метод приготовления</th>
                                <th scope="col">Назначение</th>
                                <th scope="col">Товар доступен</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($allitems as $value):
                                ?>
                                <tr>
                                    <form action="../modules/editItem.php?id=<?= $value['items_article'] ?>" method="POST">
                                    <?php 
                                    foreach($value AS $key => $cell):
                                        if($key !== 'items_id'):
                                    ?>
                                        <?php 
                                         if($key == 'items_available'):
                                        ?>
                                        <td>
                                                <select class="form-select" name="items_available" id="items_available">
                                                    <option selected disabled hidden>Товар доступен</option>
                                                    <option <?php echo $value['items_available'] == 1 ? 'selected' : ''?> value="1">Да</option>
                                                    <option <?php echo $value['items_available'] == 2 ? 'selected' : ''?> value="2">Нет</option>
                                                </select>
                                            </td>
                                            <?php 
                                            continue;
                                            endif;
                                            ?>
                                        <?php 
                                         if($key == 'items_category'):
                                        ?>
                                        <td>
                                        <select class="form-select" name="items_category" id="items_category">
                                            <option selected disabled hidden>Выбрать категорию</option>

                                            <?php 
                                            include('../modules/db.php');
                                            $mass = $conn -> query('SELECT * FROM `categories`');
                                            $conn -> close();
                                            while($category = $mass -> fetch_assoc()):?>

                                            <option <?php echo $value['items_category'] == $category['cat_id'] ? 'selected' : '' ?> value="<?= $category['cat_id']; ?>">
                                                <?= $category['cat_name']; ?>
                                            </option>


                                            <?php endwhile; ?>


                                        </select>
                                        </td>
                                            <?php 
                                            continue;
                                            endif;
                                            ?>
                                        <td>
                                            <input 
                                                for="edit-form"
                                                type="text" 
                                                name="<?= $key ?>"
                                                value="<?= $cell ?>"
                                                class="form-control"
                                                style="width: 150px"
                                                required>
                                        </td>
                                        <?php 
                                        else:
                                            ?>
                                    <td>
                                        <?= $cell ?>
                                    </td>
                                    <td>
                                       <div class="d-flex w-100 acc-images">
                                       <?php 
                                       include("../modules/db.php");
                                       $idimage = $value['items_article'];
                                       $allImages = $conn -> query("SELECT * FROM `items_images` WHERE `item_id` = '$idimage'");
                                       $conn -> close();
                                       foreach($allImages as $image):
                                       ?>
                                          <div class="remove-img">
                                              <a href="/modules/deleteImage.php?id=<?= $image['image_id'] ?>" class="text-decoration-none">
                                                <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
                                              </a>
                                          </div>
                                          <img src="/assets/img/<?= $image['item_image'] ?>" alt="">
                                       <?php endforeach; ?>
                                       </div>
                                                <input 
                                                    for="edit-form"
                                                    type="file" 
                                                    multiple 
                                                    accept="image/*" 
                                                    class="form-control" 
                                                    name="images[]" 
                                                    id="img"
                                                >
                                    </td>
                                    <?php 
                                        endif;
                                    endforeach; 
                                    ?>
                                            
                                            <td>
                                                <button type="submit">Редактировать</button>
                                            </td>
                                            <td>
                                                <a class="button-delete" href="../modules/delete.php?id=<?= $value['items_article'] ?>">Удалить</a>
                                            </td>
                                        </form>
                                </tr>
                                
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Все категории -->
                <div class="row px-0 mt-4 d-flex flex-column align-center acc-info">
                    <h2 id="h2" class="nav-link-font px-0 text-black text-start"><strong>Все категории</strong></h2>
                    <div class="col-12 d-flex flex-row justify-content-between acc-info px-0">
                    <?php
                        include("../modules/db.php");
                        $resultItems = $conn -> query("SELECT * FROM `categories`");
                        $allcats = array();
                        while($order = $resultItems->fetch_assoc()) {
                            $allcats[] = $order;
                        };

                        $conn -> close();
                    ?>
                        <div class="col-12 d-flex flex-column align-items-start acc-info overflow-auto mb-5"
                        style="border-radius: 10px">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Изображение</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($allcats as $value):
                                ?>
                                <tr>
                                    <form action="../modules/editCat.php?id=<?= $value['cat_id'] ?>" method="POST">
                                    <?php 
                                    foreach($value AS $key => $cell):
                                        if($key !== 'cat_id'):
                                    ?>
                                        <?php 
                                         if($key == 'cat_img'):
                                        ?>
                                        <td>
                                        <?php 
                                          if(!empty($cell)):
                                          ?>
                                        <div class="d-flex w-100 acc-images">
                                          <div class="remove-img">
                                              <a href="/modules/deleteImage.php?idcat=<?= $value['cat_id'] ?>" class="text-decoration-none">
                                                <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
                                              </a>
                                          </div>
                                          <img src="/assets/icons/<?= $cell ?>" alt="">
                                       </div>
                                       <?php else: ?>
                                            <input 
                                                    type="file" 
                                                    class="form-control" 
                                                    name="cat_img[]" 
                                                    id="img"
                                              >
                                          <?php 
                                          endif;
                                          ?>
                                        </td>
                                            <?php 
                                            continue;
                                            endif;
                                            ?>
                                        <td>
                                            <input 
                                                for="edit-form"
                                                type="text" 
                                                name="<?= $key ?>"
                                                value="<?= $cell ?>"
                                                class="form-control"
                                                style="width: 150px"
                                                required>
                                        </td>
                                        <?php 
                                        else:
                                            ?>
                                    <td>
                                        <?= $cell ?>
                                    </td>
                                    <?php 
                                        endif;
                                    endforeach; 
                                    ?>
                                            
                                            <td>
                                                <button type="submit">Редактировать</button>
                                            </td>
                                            <td>
                                                <a class="button-delete" href="../modules/delete-cat.php?id=<?= $value['cat_id'] ?>">Удалить</a>
                                            </td>
                                        </form>
                                </tr>
                                
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                endif;
                ?>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>
