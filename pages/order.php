<?php 
session_start();
if(!isset($_COOKIE['role']) || !isset($_SESSION['cart'])) {
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
}
if(isset($_SESSION['cartCost']) && !empty($_SESSION['cartCost'])){
    $totalcost = $_SESSION['cartCost'];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/order.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
        <?php 
            $pagetitle = ["Оформление заказа"];
            $pageurl = ["/pages/order.php"];
            include ("../modules/breadcrumbs.php"); 
            ?>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="text-start mt-0 mt-lg-5 h2-title nav-link-font">Оформление заказа</h1>
                <a href="/pages/catalog.php" class="clear-btn d-sm-flex align-items-center mb-0 btn sub-header-font">Вернуться в каталог</a>
            </div>
            <section class="order-section">
                <?php 
                if(isset($_COOKIE['role'])):
                    include("../modules/db.php");
                    $id = $_COOKIE['id'];
                    $resUser = $conn -> query("SELECT * FROM `users` WHERE `users_id` = '$id'");
                    $user = $resUser -> fetch_assoc();
                    $conn -> close();
                endif;
                ?>
                <form 
                id="orderForm"
                action="../modules/addOrder.php" 
                method="POST" 
                class="contact-form row d-flex justify-content-start flex-wrap g-4 needs-validation"
                novalidate
                >
                    <div class="col-12 col-sm-4">
                        <label for="validationName" class="form-label">ФИО</label>
                        <input 
                        type="text" 
                        pattern="[a-zA-Zа-яА-Я]+ [a-zA-Zа-яА-Я]+ [a-zA-Zа-яА-Я]+"
                        name="name"
                        class="form-control" 
                        id="validationName"
                        required
                        >
                        <div class="valid-feedback">
                            Отлично!
                        </div>
                        <div class="invalid-feedback">
                            Имя должно содержать только символы и пробелы
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <label for="email" class="form-label">Электронная почта</label>
                        <input 
                        type="text" 
                        name="email" 
                        class="form-control" 
                        id="email"
                        required 
                        value="<?= $user['users_email'] ?>"
                        pattern="[a-zA-Z]+@[a-zA-Z]+">
                        <div class="valid-feedback">
                            Отлично!
                        </div>
                        <div class="invalid-feedback">
                            Введите правильную почту
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <label for="tel" class="form-label">Телефон</label>
                        <input 
                        id="validationPhoneOrder" 
                        type="text" 
                        name="tel" 
                        pattern="\+7\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}"
                        class="form-control"
                        required
                        placeholder="+7(999)999-99-99"
                        value="<?= $user['users_tel'] ?>"
                        title="Номер телефона">
                        <div class="valid-feedback">
                            Отлично!
                        </div>
                        <div class="invalid-feedback">
                            Номер телефона должен быть в формате +7 (999) 999-99-99
                        </div>
                    </div>
                    <div class="row col-12 p-0 m-0 info-courier">
                        <div class="col-12 col-sm-4">
                            <label for="address" class="form-label">Адрес</label>
                            <input 
                            type="text" 
                            name="address" 
                            class="form-control" 
                            id="address"
                            required>
                            <div class="valid-feedback">
                            Отлично!
                        </div>
                        <div class="invalid-feedback">
                            Введите правильно адрес
                        </div>
                        </div>
                            <div class="col-12 col-sm-4 d-flex align-items-end">
                                <select name="delivery" class="form-select delivery" required>
                                    <option selected disabled hidden>Способ доставки</option>
                                    <option value="1">Курьер</option>
                                    <option value="2">Самовывоз</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-4 d-flex align-items-end">
                                <select name="payment" class="form-select payment" required>
                                    <option selected disabled hidden>Способ оплаты</option>
                                    <option value="1">Онлайн (предоплата)</option>
                                    <option value="2">Курьеру</option>
                                </select>
                            </div>
                            
                    </div>
                    <h2 class="text-start nav-link-font h2-title">Содержание заказа</h2>
                    <section class="cart-section d-flex row flex-column">
                        <?php
                        if(isset($_SESSION['cart']) && !empty(['cart'])):
                            foreach($_SESSION['cart'] as $key => $value):
                                ?>
           <div class="row cart-item mb-4 d-flex flex-row" data-item-id="<?= $value['items_article'] ?>">
                    <div class="col-12 col-sm-3 p-4 pb-0 pb-sm-4 pe-sm-0">
                        <div class="p-3 d-flex justify-content-center align-items-center cart-img-top" style="background-color: #BCB5A6; border-radius: 10px; ">
                            <img class="w-100" src="/assets/img/<?= $value['img'] ?>" alt="...">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 p-4  flex-column align-items-start justify-content-start">
                        <p class="amiko-font article text-black pb-0 mb-1">Артикул: <?= $value['items_article'] ?></p>
                        <p class="mb-3 amiko-font text-black item-name"><b><?= $value['items_name'] ?></b></p>
                        <p class="mb-1 amiko-font text-black"><b>Назначение: </b> <span><?= $value['items_purpose'] ?></span></p>
                        <p class="mb-1 amiko-font text-black"><b>Вес: </b> <span>250 г.</span></p>
                        <p class="mb-1 amiko-font text-black item_count"><b>На складе: </b> <span><?= $value['items_count'] ?> шт.</span></p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 p-4 flex-column align-items-start justify-content-start">
                        <p class="mb-2 amiko-font text-black"><b>Стоимость: </b> <span class="cart-price"><?= $value['items_price'] ?></span> ₽</p>
                        <div class="w-100 px-3 bg-black" style="border-radius: 10px">
                            <div class="quantity d-flex justify-content-center" style="height: 30px;">
                                <!-- <a href="/modules/minusCart.php?id=<?= $value['items_article'] ?>" id="minus" class="text-decoration-none quantity-minus button mb-0">-</a> -->
                                    <input 
                                        id="value" 
                                        disabled
                                        type="number" 
                                        value="<?= $value['count'] ?>" 
                                        class="text-center" 
                                        data-product_id="${articleNumber}" 
                                        min="1"
                                        max="<?= $value['items_count'] ?>" 
                                        style="width: 50px; margin: 0 10px;"
                                    >
                                <!-- <a href="/modules/plusCart.php?id=<?= $value['items_article'] ?>" id="plus" class="text-decoration-none quantity-plus button mb-0">+</a> -->
                            </div>
                        </div>
                        <p class="mt-5 mt-sm-2 d-block d-lg-none amiko-font text-black"><b>Цена: </b> <span class="cart-cost underlined"><?= $value['items_price'] * $value['count'] ?></span> ₽</p>
                    </div>
                    <div class="col-2 d-none d-lg-block h-100 ms-4 pt-4 flex-column align-items-start justify-content-start">
                        <p class="mb-2 amiko-font text-black"><b>Цена: </b> <span class="cart-cost"><?= $value['items_price'] * $value['count'] ?></span> ₽</p>
                    </div>
                        <!-- <div class="delete">
                            <a href="/modules/deleteFromCart.php?id=<?= $value['items_article'] ?>">
                                <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
                            </a>
                        </div> -->
                    </div>
                        <?php endforeach; 
                        else:
                        ?>
                        <div class="d-flex flex-column align-items-center">
                                <h2 class="text-center mt-5 mb-2 h2-title nav-link-font">В корзине пусто</h2>
                                <p class="text-center sub-header-font" style="font-size: 18px">Перейдите в каталог</p>
                                <a href="/pages/catalog.php" class="text-dark underlined sub-header-font">В каталог</a>
                        </div>
                        <?php endif; ?>
                    </section>
                    <div>
                        <p class="sub-header-font cost-items text-black" style="font-size: 18px">
                            Стоимость товаров: <?= $totalcost ?> ₽
                        </p>
                        <p class="sub-header-font text-black costDelivery" style="font-size: 18px">
                            Стоимость доставки: 1500 ₽
                        </p>
                        <p class="sub-header-font text-black mt-5" style="font-size: 21px">
                            <strong>Итого к оплате: </strong>
                            <span class="mb-0 sub-header-font text-black mt-5 totalcost" style="font-size: 21px">
                                <?= $totalcost + 1500 ?>
                            </span> ₽
                        </p>
                    </div>
                    <div class="d-flex justify-content-start row cart-buttons mt-4">
                    <button 
                        type="submit" 
                        class="end-order text-decoration-none d-flex align-items-center justify-content-center col-12 col-sm-5 nav-link-font"
                        >
                            Оформить заказ
                        </button>
                    </div>
                </form>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>