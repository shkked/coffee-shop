<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статьи</title>
    <?php include("../modules/links.php") ?>
    <script defer src="../assets/script/articles.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
          <!-- Добавление статьи -->
        <div class="modal fade" id="addArticle" tabindex="-1" aria-labelledby="addArticle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addArticle">Написать статью</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="addArticle" action="../modules/addArticle.php" method="POST" class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
          <label for="name" class="form-label">Название</label>
          <input type="text" name="name" class="form-control" id="name" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      <div class="col-md-4">
          <label for="text" class="form-label">Текст</label>
          <textarea placeholder="Ваша статья" name="text" class="form-control" id="text" required></textarea>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="img" class="form-label">Изображение</label>
          <input type="file" name="img" class="form-control" id="img" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="img" class="form-label">Автор</label>
          <input type="text" name="author" class="form-control" id="img" disabled value="Вы – <?= $_COOKIE['userName'] ?>">
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
    <!-- Просмотр статьи -->
        <div class="modal fade" id="viewArticle" tabindex="-1" aria-labelledby="viewArticle" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content contact-form">
      <div class="modal-header">
                <?php 
                    include("../modules/db.php");
                    if(isset($_GET['id'])):
                      $id = $_GET['id'];
                      $activeArticle = $conn -> query("SELECT articles.*,users.* FROM `articles` JOIN users ON articles.articles_author = users.users_id WHERE `articles_id` = '$id'");
                      $activeArticle = $activeArticle -> fetch_assoc();
                      $conn -> close();
                    endif;
                ?>
        <h1 class="modal-title fs-5" id="viewArticle"><?= $activeArticle['articles_name'] ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img class="w-100" src="../assets/img/<?= $activeArticle['articles_img'] ?>" alt="">
        <p class="amiko-font text-black mb-0 mt-4" style="word-break: break-word; font-size: 18px;"><?= $activeArticle['articles_text'] ?></p>
        <p class="amiko-font text-black mb-0 mt-4">Автор: <?= $activeArticle['users_name'] ?></p>
      </div>
    </div>
  </div>
    </div>
            <section>
                <?php 
                if(isset($_COOKIE['role'])):
                ?>
            <div class="admin-btn row d-flex justify-content-center">
                <div class="col-5 col-sm-3">
                  <button type="button" class="w-100 btn my-btn btn-primary" data-bs-toggle="modal" data-bs-target="#addArticle">
                  Написать статью
                </button>
                </div>
            </div>
                <?php 
                endif;
                ?>
                <h1 class="text-start mt-5 h2-title nav-link-font">Статьи</h1>
                <div class="d-flex row flex-row justify-content-between">
                    <?php 
                    include('../modules/db.php');
                    $sql = "SELECT articles.*,users.* FROM articles JOIN users ON articles.articles_author = users.users_id";
                    $result = $conn -> query($sql);
                    $conn -> close();
                    while($row = $result->fetch_assoc()):
                      include('../modules/article-item.php');
                    endwhile;
                    ?>
                </div>
            </section>
        </div>
    </main>
    <?php include ("../modules/footer.php"); ?>
    <script>

function toArticle(articleId) {
  window.location.href = "/pages/articles.php?id=" + articleId;
}
    </script>
</body>
</html>