<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Избранное</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/favorite_render.js"></script>
    <script defer src="../assets/script/favorite_data.js"></script>
    <script defer src="../assets/script/card-ranges.js"></script>
    <script defer src="../assets/script/cart_data.js"></script
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <h1 class="text-start mt-5 h2-title nav-link-font">Избранное</h1>
                <button type="button" class="clear-btn d-flex align-items-center mb-0 btn sub-header-font">Очистить список</и>
            </div>
          <section class="d-flex row flex-row justify-content-between favorite-section">
          <!-- <div class="col-12 mb-3 col-md-5 col-lg-4 item-block">
                      <div class="card">
                        <div class="ps-4 pt-4 pe-4">
                          <div class="d-flex justify-content-center align-items-center p-5" style="background-color: #BCB5A6; border-radius: 10px;">
                            <img src="/assets/img/<?= $arrItems['items_img'] ?>" class="card-img-top" alt="...">
                            <div class="favorite pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                <circle cx="17" cy="17" r="17" fill="white"/>
                                <path d="M25.1558 11.094C23.1222 9.4262 20.0979 9.72619 18.2313 11.5797L17.5003 12.3047L16.7692 11.5797C14.9064 9.72619 11.8783 9.4262 9.84476 11.094C7.51433 13.0083 7.39187 16.4439 9.47738 18.5189L16.6579 25.6545C17.1218 26.1152 17.8751 26.1152 18.3389 25.6545L25.5195 18.5189C27.6087 16.4439 27.4862 13.0083 25.1558 11.094Z" fill="black"/>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="container-card">
                        <a href="/pages/item_info.php" style="text-decoration: none !important; color: black;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary amiko-font">Артикул: <?= $arrItems['items_article'] ?></h6>
                            <h5 class="card-title"><?= $arrItems['items_name'] ?></h5>
                            <p class="card-text"><?= $arrItems['items_subdesc'] ?></p>
                            <div class="card-ranges">
                                <label for="toxic" class="form-label amiko-font card-subtitle" style="color: #070707;">Кислотность</label>
                                  <input type="range" class="form-range range-bg" id="toxic" value="<?= $arrItems['items_acidity'] ?>" disabled>
                                <label for="density" class="form-label amiko-font card-subtitle" style="color: #070707;">Плотность</label>
                                  <input type="range" class="form-range" id="density" value="<?= $arrItems['items_density'] ?>" disabled>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-3 pe-4">
                              <a href="#" class="amiko-font" style="text-align: center; color: black; font-size: 14px; font-style: normal; font-weight: 400;line-height: normal;">в зернах 
                                <svg class="ms-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                                  <path d="M7.15474 9.65876L0.35261 3.07599C-0.117537 2.62101 -0.117537 1.88529 0.35261 1.43514L1.48296 0.341239C1.95311 -0.113746 2.71335 -0.113746 3.17849 0.341239L8 5.00726L12.8215 0.341239C13.2917 -0.113746 14.0519 -0.113746 14.517 0.341239L15.6474 1.43514C16.1175 1.89013 16.1175 2.62585 15.6474 3.07599L8.84526 9.65876C8.38512 10.1137 7.62488 10.1137 7.15474 9.65876Z" fill="black"/>
                                </svg>
                              </a>
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                  <svg class="minus-btn" xmlns="http://www.w3.org/2000/svg" width="11" height="5" viewBox="0 0 11 5" fill="none">
                                    <path d="M10.1029 0.475586H0.777143C0.348014 0.475586 0 1.01931 0 1.68976V2.90393C0 3.57438 0.348014 4.1181 0.777143 4.1181H10.1029C10.532 4.1181 10.88 3.57438 10.88 2.90393V1.68976C10.88 1.01931 10.532 0.475586 10.1029 0.475586Z" fill="black"/>
                                  </svg>
                                    <p class="amiko-font count-item ms-2 me-2">1</p>
                                    <svg class="plus-btn" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                      <path d="M10.9107 4.61694H7.13393V0.839444C7.13393 0.375913 6.75809 0 6.29464 0H5.45536C4.99191 0 4.61607 0.375913 4.61607 0.839444V4.61694H0.839286C0.375843 4.61694 0 4.99285 0 5.45638V6.29583C0 6.75936 0.375843 7.13527 0.839286 7.13527H4.61607V10.9128C4.61607 11.3763 4.99191 11.7522 5.45536 11.7522H6.29464C6.75809 11.7522 7.13393 11.3763 7.13393 10.9128V7.13527H10.9107C11.3742 7.13527 11.75 6.75936 11.75 6.29583V5.45638C11.75 4.99285 11.3742 4.61694 10.9107 4.61694Z" fill="black"/>
                                    </svg>
                                </div>
                              </div>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-3">
                              <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-column align-items-center me-3">
                                  <p class="amiko-font" style="color: black; margin-bottom: 0; font-size: 14px">250 г.</p>
                                  <div class="line"></div>
                                  <p class="amiko-font card-price" style="color: black; margin-bottom: 0; font-size: 14px"><?= $arrItems['items_price'] ?> ₽</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                  <p class="amiko-font" style="color: rgba(0, 0, 0, 0.50); margin-bottom: 0; font-size: 14px">1000 г.</p>
                                  <div class="line" style="background-color: rgba(0, 0, 0, 0.50)"></div>
                                  <p class="amiko-font" style="color: rgba(0, 0, 0, 0.50); margin-bottom: 0; font-size: 14px"><?php echo $arrItems['items_price']*4 ?> ₽</p>
                                </div>
                              </div>
                              <p class="btn btn-primary my-btn mb-0 d-flex align-items-center justify-content-center">Купить</p>
                            </div>
                        </div>
                      </div>
                      </div>
          </div> -->
          </section>
        </div>
    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>