<div class="col-12 mb-3 col-md-5 col-lg-3">
                      <div class="card">
                        <div class="ps-4 pt-4 pe-4">
                          <div class="d-flex justify-content-center align-items-center p-5" style="background-color: #BCB5A6; border-radius: 10px;">
                        <a href="/pages/item_info.php?id=<?= $arrItems['items_article'] ?>" style="text-decoration: none !important; color: black;">
                            <img src="/assets/img/<?= $arrItems['items_img'] ?>" class="card-img-top" alt="...">
                        </a>
                            <div class="favorite pointer">
                              <a href="/modules/addFav.php?id=<?= $arrItems['items_article'] ?>" class="text-decoration-none">
                                  <?php 
                              if(isset($_SESSION['fav']) && !empty($_SESSION['fav'])){
                                // echo var_dump($_SESSION['fav']);
                                foreach($_SESSION['fav'] as $key => $value){
                                  if($value['items_article'] == $arrItems['items_article']){
                                    $findFav = true; 
                                    break;
                                  } else {
                                    $findFav = false;
                                  }
                                }
                                }
                              // var_dump($findFav);
                              if($findFav == true):
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <circle cx="17" cy="17" r="17" fill="white"/>
                                      <path 
                                      d="M25.1558 11.094C23.1222 9.4262 20.0979 9.72619 18.2313 11.5797L17.5003 12.3047L16.7692 11.5797C14.9064 9.72619 11.8783 9.4262 9.84476 11.094C7.51433 13.0083 7.39187 16.4439 9.47738 18.5189L16.6579 25.6545C17.1218 26.1152 17.8751 26.1152 18.3389 25.6545L25.5195 18.5189C27.6087 16.4439 27.4862 13.0083 25.1558 11.094Z" 
                                      fill="red"/>
                                    </svg>
                                    <?php
                                    else:
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <circle cx="17" cy="17" r="17" fill="white"/>
                                      <path 
                                      d="M25.1558 11.094C23.1222 9.4262 20.0979 9.72619 18.2313 11.5797L17.5003 12.3047L16.7692 11.5797C14.9064 9.72619 11.8783 9.4262 9.84476 11.094C7.51433 13.0083 7.39187 16.4439 9.47738 18.5189L16.6579 25.6545C17.1218 26.1152 17.8751 26.1152 18.3389 25.6545L25.5195 18.5189C27.6087 16.4439 27.4862 13.0083 25.1558 11.094Z" 
                                      fill="black"/>
                                    </svg>
                                    <?php
                                    endif;
                                    ?>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="container-card">
                        <div class="card-body px-0 py-4 p-md-4">
                            <h6 class="card-subtitle mb-2 text-body-secondary amiko-font">Артикул: <?= $arrItems['items_article'] ?></h6>
                            <h5 class="card-title"><?= $arrItems['items_name'] ?></h5>
                            <p class="card-text w-100"><?= $arrItems['items_subdesc'] ?></p>
                            <?php 
                            if($arrItems['items_category'] == 1):
                            ?>
                            <div class="card-ranges">
                                <label for="toxic" class="form-label amiko-font card-subtitle" style="color: #070707;">Кислотность</label>
                                <div class="wrapper">
                                    <input 
                                    type="range" 
                                    class="form-range toxic-range" 
                                    id="toxic" 
                                    value="<?= $arrItems['items_acidity'] ?>" 
                                    disabled
                                    >
                                    <div class="progress-tox"></div>
                                </div>
                                <label for="density" class="form-label amiko-font card-subtitle" style="color: #070707;">Плотность</label>
                                <div class="wrapper">
                                    <input 
                                    type="range" 
                                    class="form-range" 
                                    id="density" 
                                    value="<?= $arrItems['items_density'] ?>" 
                                    disabled
                                    >
                                    <div class="progress-den"></div>
                                </div>
                            </div>
                            <?php 
                            else:
                            ?>
                            <div class="d-flex flex-row align-items-center justify-content-between mt-3 pe-4">
                              <p class="amiko-font mb-0" style="text-align: start; color: black; font-size: 14px; font-style: normal; font-weight: 400;line-height: normal;">Назначение: <?= $arrItems['items_purpose'] ?></p>
                            </div>
                            <div style="margin-bottom: 125px;">
                            </div>
                            <?php 
                            endif;
                            ?>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-5">
                              <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-column align-items-center me-2">
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
                              <?php 
                              if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                  if($value['items_article'] == $arrItems['items_article']){
                                    $find = true;
                                    break;
                                  } else {
                                    $find = false;
                                  }
                                }
                              }
                              if(!$find):
                              ?>
                                  <a href="../modules/addCart.php?id=<?= $arrItems['items_article'] ?>" class="btn btn-primary my-btn mb-0 d-flex align-items-center justify-content-center">
                                    Купить
                                  </a>
                                  <?php
                                  else:
                                  ?>
                                  <a 
                                  href="../modules/deleteFromCart.php?id=<?= $arrItems['items_article'] ?>" 
                                  class="btn btn-primary add-btn mb-0 d-flex align-items-center justify-content-center" >
                                    Добавлено
                                  </a>
                                  <?php
                                  endif;
                                  ?>
                            </div>
                        </div>
                      </div>
                      </div>
                    </div>