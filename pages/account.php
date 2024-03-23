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
        <div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Смена пароля</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/modules/changePass.php" method="GET" class="row g-3 needs-validation">
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Старый пароль</label>
            <input type="text" name="oldpass" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Новый пароль</label>
            <input type="text" name="newpass" class="form-control" id="validationCustom02" required>
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
                <div class="row d-flex flex-column align-center acc-info">
                    <h1 class="h2-title nav-link-font text-black text-start"><strong>Ваши данные</strong></h1>
                    <p>Ваше имя: <span><?php echo $user['users_name'];?></span></p>
                    <p>Ваш username: <span><?php echo $user['users_username'];?></span></p>
                    <p>Ваш email: <span><?php echo $user['users_email'];?></span></p>
                    <div class="col-4">
                        <button data-bs-toggle="modal" data-bs-target="#changePass" class="my-btn text-center w-100 ">Изменить пароль</button>
                    </div>
                </div>
                <?php 
                else:
                ?>
                <div class="d-flex flex-column align-center">
                    <p><strong>Ваши данные не найдены!</strong></p>
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