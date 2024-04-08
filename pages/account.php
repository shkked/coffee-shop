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

            <section>
                <h1 class="text-start h2-title nav-link-font mt-5">Личный кабинет</h1>
                <?php
                    include("../modules/db.php");
                    $id = $_COOKIE['id'];
                    $result = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$id'");
                    $resultOrder = $conn -> query("SELECT * FROM `orders` WHERE `users_id` = '$id'");
                    $user = $result -> fetch_assoc();
                    $conn -> close();
                    if($user):
                ?>
                <div class="row ms-0 d-flex flex-row align-center">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-center" style="border-radius: 50%; width: 200px; height: 200px; background-color: black;">
                            <img class="w-75 h-75" src="/assets/img/<?= $user['users_img'] ?>" alt="user-img">
                        </div>
                    </div>
                    <div class="col-6 ms-0 d-flex flex-column align-center acc-info">
                        <h2 class="nav-link-font px-0 text-black text-start"><strong>Ваши данные</strong></h2>
                        <p class="px-0">Ваше имя: <span><?php echo $user['users_name'];?></span></p>
                        <p class="px-0">Ваш номер телефона: <span><?php echo $user['users_tel'];?></span></p>
                        <p class="px-0">Ваш email: <span><?php echo $user['users_email'];?></span></p>
                        <div class="col-4 px-0">
                            <button data-bs-toggle="modal" data-bs-target="#changePass" class="my-btn text-center w-100 ">Изменить пароль</button>
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
                <div class="row ms-0 mt-4 d-flex flex-column align-center acc-info">
                    <h2 class="nav-link-font px-0 text-black text-start"><strong>Ваши заказы</strong></h2>
                    <div class="col-12 d-flex flex-row justify-content-between acc-info px-0">
                    <?php
                        include("../modules/db.php");
                        $id = $_COOKIE['id'];
                        $result = $conn -> query("SELECT * FROM `order-info` WHERE `order_user` = '$id'");
                        $order_info = $result -> fetch_assoc();
                        $conn -> close();
                        if($order_info):
                    ?>
                        <div class="col-4 d-flex flex-column align-items-start acc-info">
                            <p class="px-0">Номер заказа: <span><?php echo $user['order_id'];?></span></p>
                            <p class="px-0">Стоимость заказа: <span><?php echo $user['order_price'];?></span></p>
                        </div>
                        <?php
                        else:
                        ?>
                        <p class="px-0">Заказы не найдены</p>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>
