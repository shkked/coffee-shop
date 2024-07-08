<div 
                      onclick="toArticle('<?= $row['articles_id'] ?>')" 
                      class="pointer d-flex flex-column article-card col-lg-3 col-12 col-md-5"
                      >
                        <div class="article-img">
                                        <!-- <a href="/pages/articles.php?id=<?= $row['articles_id'] ?>" style="text-decoration: none !important"> -->
                                          <img src="/assets/img/<?= $row['articles_img'] ?>" alt="ar-img">
                                          <!-- <a href="../modules/remove-article.php?id=<?= $row['articles_id'] ?>" class="admin-delete pointer">
                                                <img src="../node_modules/bootstrap-icons/icons/trash-fill.svg" alt="remove">
                                            </a> -->
                                        <!-- </a> -->
                                      </div>
                                      <div class="p-4 article-body">
                                          <p style="font-weight: bold; font-size: 20px; word-break: break-word" class="amiko-font text-black"><?= $row['articles_name'] ?></p>
                                          <div class="user d-flex flex-row justify-content-between">
                                            <div class="d-flex">
                                              <div style="border-radius: 60px; width: 18px; height: 18px; background-color: #BCB5A6"></div>
                                              <p class="ms-2 amiko-font text-black mb-0"><?= $row['users_name'] ?></p>
                                            </div>
                                            <div>
                                              <p class="ms-2 amiko-font text-black mb-0"><?= $row['articles_date'] ?></p>
                                            </div>
                                          </div>
                                      </div>
                      </div>