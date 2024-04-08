<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/cart_render.js"></script>
    <script defer src="../assets/script/cart.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="text-start mt-5 h2-title nav-link-font">Корзина</h1>
                <button type="button" class="clear-btn d-flex align-items-center mb-0 btn sub-header-font">Очистить корзину</и>
            </div>
            <section class="cart-section d-flex row flex-column">
                <!-- <div class="row cart-item mb-4 d-flex flex-row align-items-center">
                    <div class="col-3 p-4 pe-0">
                        <div class="p-3 d-flex justify-content-center align-items-center cart-img-top" style="background-color: #BCB5A6; border-radius: 10px; ">
                            <img class="w-100" src="/assets/img/espresso-main.png" alt="...">
                          </div>
                    </div>
                    <div class="col-4 ps-0 pt-4 h-100 flex-column align-items-start justify-content-start">
                        <p class="amiko-font article text-black pb-0 mb-1">Артикул: 122342</p>
                        <p class="mb-3 amiko-font text-black item-name"><b>Эфиопия Иргачефф нат</b></p>
                        <p class="mb-1 amiko-font text-black"><b>Назначение: </b> <span>Для эспрессо</span></p>
                        <p class="mb-1 amiko-font text-black"><b>Вес: </b> <span>250 г.</span></p>
                    </div>
                    <div class="col-2 pt-4 h-100 flex-column align-items-start justify-content-start">
                        <p class="mb-2 amiko-font text-black"><b>Стоимость: </b> <span>500 ₽</span></p>
                        <div class="w-100 px-3 bg-black" style="border-radius: 10px">
                            <div class="quantity d-flex justify-content-between">
                                <p id="minus" class="quantity-minus button mb-0">-</p>
                                <input 
                                    id="value" 
                                    type="number" 
                                    name="quantity" 
                                    value="1" 
                                    class="text-center quantity-value" 
                                    data-product_id="375" 
                                    data-min="1" 
                                    data-max="999999" 
                                    style="width: 50px;margin: 0 10px;"
                                >
                                <p id="plus" class="quantity-plus button mb-0">+</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 h-100 ms-4 pt-4 flex-column align-items-start justify-content-start">
                    <p class="mb-2 amiko-font text-black"><b>Цена: </b> <span>2000 ₽</span></p>
                    </div>
                    <div class="delete">
                        <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
                    </div>
                </div> -->
            </section>
            <div class="d-flex justify-content-between cart-buttons mt-4">
                <div class="col-4 d-flex flex-column align-items-start">
                    <p class="nav-link-font" style="font-size: 25px">Есть промокод? </p>   
                    <input placeholder="Введите промокод..." class="promo px-3" type="text" name="promo" id="promo">
                </div>    
                <button class="end-order col-4 nav-link-font">Оформить заказ</button>
            </div>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>