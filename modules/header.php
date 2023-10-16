<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="logo" src="../assets/img/logo.png" alt="logo-website">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/php" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="/php/pages/catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
          <li><a href="/php/pages/shops.php" class="nav-link px-2 text-white">Магазины</a></li>
          <li><a href="/php/pages/aboutme.php" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="/php/pages/contactus.php" class="nav-link px-2 text-white">Контакты</a></li>
        </ul>


        <?php if(isset($_COOKIE['role'])): ?>


          <div class="text-end">
            <p>Добро пожаловать, <span><?php echo $_COOKIE['userName']; ?></span></p>
            <?php if($_COOKIE['role'] == 1): ?>

              <p>Вы – админ</p>
              <a href="/php/pages/account.php">Личный кабинет</a>
              <a href="/php/modules/exit.php">Exit</a>
              <?php else: ?>

                <p>Вы – пользователь</p>
                <a href="/php/pages/account.php">Личный кабинет</a>
                <a href="/php/modules/exit.php">Exit</a>
                <?php endif; ?>
              </div>
          <?php else: ?>

            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#regModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              </button>
              <a class="btn btn-warning" href="/php/pages/cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
          </a>
            </div>

            <?php endif; ?>
      </div>
    </div>
  </header>


  <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/php/modules/reg.php" method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Регистрация</button>
  </div>
  <div>
    <p>Зарегистрированы? <a style="text-decoration: underline; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#authModal">Войдите</a></p>
  </div>
</form>
      </div>
    </div>
  </div>
    </div>
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/php/modules/auth.php" method="GET" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Войти</button>
  </div>
</form>
      </div>
    </div>
  </div>
    </div>