<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Эфиопия Иргачефф нат</title>
    <?php include("../modules/links.php") ?>
    <link rel="stylesheet" href="../node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script defer src="../node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script defer src="../assets/script/splide-carousel.js"></script>
    <script defer src="../assets/script/card-ranges.js"></script>
    <script defer src="../assets/script/item_info.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
            <section class="item_info">
            <?php
                $id = $_GET["id"];
                include('../modules/db.php');

                $activeItem = $conn -> query("SELECT * FROM items WHERE `items_article` = '$id'");
                $iteminfo = $activeItem -> fetch_assoc();
                $imgId = $iteminfo['items_article'];
                $imgItem = $conn -> query("SELECT * FROM items_images WHERE `item_id` = '$imgId'");
                $allImg = array();
                while($row = $imgItem->fetch_assoc()) {
                    $allImg[] = $row;
                };

                $activeItem = array_merge(
                    $activeItem -> fetch_assoc(), 
                    $allImg
                );
                $allImages = []; // Создаем пустой массив для хранения всех item_image

                // Предполагаем, что $arr - это уже существующий массив с данными товара и изображениями
                foreach ($allImg as $key => $value) {
                    // Проверяем, является ли значение массивом и содержит ли ключ item_image
                    if (is_array($value) && isset($value['item_image'])) {
                        $allImages[] = $value['item_image']; // Добавляем item_image в массив всех изображений
                    }
                }
                // echo $allImages;
                // print_r($allImages);
                // print_r($activeItem);
                $conn -> close();
            ?>
                <div class="row d-flex flex-column flex-sm-row justify-content-between mt-5">
                    <div class="col-12 col-sm-6 d-flex justify-content-start">
                        <div class="splide rounded">
                            <div class="splide__track rounded">
                                    <ul class="splide__list">
                                    <?php 
                                    foreach($allImages AS $key => $value):
                                    ?>
                                        <li class="splide__slide">
                                            <img class="w-100 card-img-top" src="../assets/img/<?= $value ?>" alt="">
                                        </li>
                                        <?php endforeach; ?>                            </ul>
                            </div>
                        </div>

                    </div>
                    <div class="item_text col-12 mt-4 mt-sm-0 col-sm-6">
                        <p class="article card-subtitle amiko-font">Артикул: <?= $iteminfo['items_article'] ?></p>
                        <h1 class="nav-link-font card-title my-3 text-black h2-title text-start"><?= $iteminfo['items_name'] ?></h1>
                        <p class="amiko-font"><?= $iteminfo['items_subdesc'] ?></p>
                        <p class="amiko-font text-black">
                          <span class="item_es underlined" style="font-weight: bold">
                            <?= $iteminfo['items_purpose'] ?>
                          </span> / 
                          <span class="item_fil">Для фильтра</span>
                          / 
                          <span class="item_bot">Кофе в банках</span>
                        </p>
                        <div class="item_property card-ranges col-9 d-flex justify-content-between">
                          <div class="d-flex col-5 flex-column">
                            <label for="toxic" class="form-label amiko-font text-black card-subtitle">Кислотность</label>
                            <div class="wrapper">
                                <input 
                                type="range" 
                                class="form-range toxic-range" 
                                id="toxic" 
                                value="<?= $iteminfo['items_acidity'] ?>" 
                                disabled
                                >
                                <div class="progress-tox"></div>
                            </div>
                          </div>
                          <div class="d-flex col-5 flex-column">
                            <label for="density" class="form-label amiko-font text-black card-subtitle">Плотность</label>
                            <div class="wrapper">
                                <input 
                                type="range" 
                                class="form-range" 
                                id="density" 
                                value="<?= $iteminfo['items_density'] ?>" 
                                disabled
                                >
                                <div class="progress-den"></div>
                            </div>
                            </div>
                        </div>
                        <p class="item_price amiko-font text-black">Цена: <span class="card-price"><?= $iteminfo['items_price'] ?></span> ₽</p>
                        <div class="item_buttons d-flex  col-6">
                            <button class="my-btn w-75 me-2">В корзину</button>
                            <div class="favorite pointer rounded" style="border: 1px solid black; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <!-- <circle cx="17" cy="17" r="17" fill="white"/> -->
                                        <path 
                                        d="M25.1558 11.094C23.1222 9.4262 20.0979 9.72619 18.2313 11.5797L17.5003 12.3047L16.7692 11.5797C14.9064 9.72619 11.8783 9.4262 9.84476 11.094C7.51433 13.0083 7.39187 16.4439 9.47738 18.5189L16.6579 25.6545C17.1218 26.1152 17.8751 26.1152 18.3389 25.6545L25.5195 18.5189C27.6087 16.4439 27.4862 13.0083 25.1558 11.094Z" 
                                        fill="black"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h2 class="h2-title mb-4 nav-link-font">Описание</h2>
                    <div>
                        <p class="amiko-font text-black card-text" style="font-size: 18px"><?= $iteminfo['items_description'] ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <h2 class="h2-title mb-4 nav-link-font">Все характеристики</h2>
                    <div>
                    <table class="table table_property">
                        <tbody>
                            <tr class="rounded">
                                <th scope="row">Регион</th>
                                <td><?= $iteminfo['items_country'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Способ обработки</th>
                                <td><?= $iteminfo['items_method'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Степень обжарки</th>
                                <td>Не указано</td>
                            </tr>
                            <tr>
                                <th scope="row">Способы приготовления</th>
                                <td><?= $iteminfo['items_purpose'] ?></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-3">
                    <h2 class="h2-title mb-4 nav-link-font">Похожие товары</h2>
                    <div class="row">
                        <?php
                            include('../modules/db.php');
                            $id = $arrItems['items_article'];
                            $sql = "SELECT * FROM items WHERE items_article <> '$id'";
                            $result = $conn -> query($sql);
                            $imgItem = $conn -> query("SELECT * FROM items_images");
                            $allImg = array();
                            while($row = $imgItem->fetch_assoc()) {
                                $allImg[] = $row;
                            }
                            $conn -> close();
                            while($arrItems = $result->fetch_assoc()):
                              $arrItems['items_img'] = reset(
                                array_filter($allImg, function($item) use ($arrItems) {
                                  return $item['item_id'] == $arrItems['items_article'];
                                })
                              )['item_image'];    
                              include ("../modules/card.php");
                            endwhile;
                        ?>
                    </div>
                </div>
            </section>
    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>