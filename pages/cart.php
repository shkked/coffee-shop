<?php
session_start();
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){

    if(isset($_COOKIE['cartCount'])) {
            $decodedObj = urldecode($_COOKIE['cartCount']);
            $userObj = json_decode($decodedObj, true);
                foreach($_SESSION['cart'] as $key => $value){
                    if($userObj['articleNumber'] == $value['items_article']){
                        $_SESSION['cart'][$key]['count'] = $userObj['count'];
                        setcookie('cartCount', '', time() - 3600, '/pages');
                    }
                };

            // var_dump($userObj);
    }
// var_dump($_SESSION['cart']);

    foreach($_SESSION['cart'] as $key => $value){
        $totalcost += $value['items_price'] * $value['count'];
    }
    $_SESSION['cartCost'] = floor($totalcost);
}
if(!isset($_COOKIE['role'])) {
    $alertmessage = "<p class='amiko-font text-black'> 
                                            <a 
                                            style='text-decoration: underline; cursor: pointer;'
                                            data-bs-toggle='modal'
                                            data-bs-target='#authModal'>
                                            Войдите</a>, чтобы продолжить
                                        </p>";
}
// var_dump($_SESSION['cart']);

if(isset($_SESSION['promo'])){
                                $promo = $_SESSION['promo'];
                                $totalcost = floor(intval($totalcost) - intval($totalcost) * $promo);
                                $_SESSION['cartCost'] = floor($totalcost);
                                unset($_SESSION['promo']);
} 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/cart_render.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
        <?php 
            $pagetitle = ["Корзина"];
            $pageurl = ["/pages/cart.php"];
            include ("../modules/breadcrumbs.php"); 
            ?>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="text-start mt-0 mt-lg-5 h2-title nav-link-font">Корзина</h1>
                <?php
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
            ?>
                <a href="/modules/clearCart.php" class="clear-btn d-flex align-items-center mb-0 btn sub-header-font">Очистить корзину</a>
                <?php
            endif;
            ?>
            </div>
            <section class="cart-section d-flex row flex-column">

                <?php 
                if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
                // var_dump($_SESSION['cart']);
                foreach($_SESSION['cart'] as $key => $value):
                ?>
                                    <div class="row cart-item mb-4 d-flex flex-row align-items-center" data-item-id="<?= $value['items_article'] ?>">
                    <div class="col-12 col-sm-3 p-4 pb-0 pb-sm-4 pe-sm-0">
                        <div onclick="toItem()" class="p-3 d-flex justify-content-center align-items-center cart-img-top" style="background-color: #BCB5A6; border-radius: 10px; ">
                            <img class="w-100" src="/assets/img/<?= $value['img'] ?>" alt="...">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 p-4 h-100 d-flex flex-column align-items-start justify-content-start">
                        <p class="amiko-font article text-black pb-0 mb-1">Артикул: <?= $value['items_article'] ?></p>
                        <p class="mb-3 amiko-font text-black item-name"><b><?= $value['items_name'] ?></b></p>
                        <p class="mb-1 amiko-font text-black"><b>Назначение: </b> <span><?= $value['items_purpose'] ?></span></p>
                        <p class="mb-1 amiko-font text-black"><b>Вес: </b> <span>250 г.</span></p>
                        <p class="mb-1 amiko-font text-black item_count"><b>На складе: </b> <span><?= $value['items_count'] ?> шт.</span></p>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2 p-4 h-100 flex-column align-items-start justify-content-start">
                        <p class="mb-2 amiko-font text-black"><b>Стоимость: </b> <span class="cart-price"><?= $value['items_price'] ?></span> ₽</p>
                        <div class="w-100 px-3 bg-black" style="border-radius: 10px">
                            <div class="quantity d-flex justify-content-between">
                                <a href="/modules/minusCart.php?id=<?= $value['items_article'] ?>" id="minus" class="text-decoration-none quantity-minus button mb-0">-</a>
                                <input 
                                    id="value" 
                                    type="number" 
                                    name="quantity" 
                                    value="<?= $value['count'] ?>" 
                                    class="text-center" 
                                    data-product_id="${articleNumber}" 
                                    min="1"
                                    max="<?= $value['items_count'] ?>" 
                                    style="width: 50px; margin: 0 10px;"
                                >
                                <a href="/modules/plusCart.php?id=<?= $value['items_article'] ?>" id="plus" class="text-decoration-none quantity-plus button mb-0">+</a>
                            </div>
                        </div>
                        <p class="mt-5 mt-sm-2 d-block d-lg-none amiko-font text-black"><b>Цена: </b> <span class="cart-cost underlined"><?= $value['items_price'] * $value['count'] ?></span> ₽</p>
                    </div>
                    <div class="col-2 d-none d-lg-block h-100 ms-4 pt-4 flex-column align-items-start justify-content-start">
                        <p class="mb-2 amiko-font text-black"><b>Цена: </b> <span class="cart-cost"><?= $value['items_price'] * $value['count'] ?></span> ₽</p>
                    </div>
                        <div class="delete">
                            <a href="/modules/deleteFromCart.php?id=<?= $value['items_article'] ?>">
                                <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
                            </a>
                        </div>
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
            <?php
            if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
            ?>
            <div class="d-flex row justify-content-between cart-buttons mt-4">
                <div class="col-12 col-sm-4 d-flex flex-column align-items-start">
                    <p class="nav-link-font" style="font-size: 25px">Есть промокод? </p>   
                    <form class="contact-form col-12 col-lg-8" action="../modules/checkPromo.php" method="POST">
                        <input 
                        style="height: 40px"
                        placeholder="Введите промокод..." 
                        class="promo my-0 px-3 w-100 text-black" 
                        type="text" 
                        name="promo" 
                        id="promo
                        ">
                    </form>
                </div>    
                <div class="col-12 col-sm-8 mt-3 mt-sm-0 d-flex flex-column flex-sm-row justify-content-between">
                    <p class="mb-0 text-start col-12 col-sm-4 me-3 nav-link-font text-sm-end text-black cart-total" style="font-size: 18px">
                            <b>Общая стоимость: <br class="d-none d-md-block d-lg-none"> </b>
                            <span class="cart-total-price nav-link-font" ><?php
                            echo $totalcost;
                                ?></span> ₽
                    </p>
                    <a 
                    class="col-12 mt-3 mt-sm-0 col-sm-8 pointer end-order text-decoration-none d-flex align-items-center justify-content-center nav-link-font"
                    <?php 
                    if(!isset($_COOKIE['role'])):
                        echo "data-bs-toggle='modal' data-bs-target='#alertModal'";
                    else:
                        echo "href='/pages/order.php'";
                    endif;
                    ?>
                    >
                    Оформить заказ
                    </a>
                </div>
            </div>
            <?php
            endif;
            ?>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>


