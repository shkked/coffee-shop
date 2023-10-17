<header class="p-3 border-bottom top-header">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white nav-link-font">г.Москва</a></li>
          <li class="ms-5"><a href="#" class="nav-link px-2 text-white nav-link-font">Как приготовить кофе?</a></li>
          <li class="ms-5"><a href="#" class="nav-link px-2 text-white nav-link-font">Как выбрать кофе?</a></li>
        </ul>


        <?php if(isset($_COOKIE['role'])): ?>


          <div class="text-end">
            <p>Добро пожаловать, <span><?php echo $_COOKIE['userName']; ?></span></p>
            <?php if($_COOKIE['role'] == 1): ?>

              <p>Вы – админ</p>
              <a href="/ground-black/pages/account.php">Личный кабинет</a>
              <a href="/ground-black/modules/exit.php">Exit</a>
              <?php else: ?>

                <p>Вы – пользователь</p>
                <a class="nav-link-font" href="/ground-black/pages/account.php">Личный кабинет</a>
                <a href="/ground-black/modules/exit.php">Exit</a>
                <?php endif; ?>
              </div>
          <?php else: ?>

            <div class="d-flex flex-row align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="dark" class="bi bi-person-fill me-3" viewBox="0 0 27 27">
                    <rect width="26.7721" height="26.076" rx="10" fill="white"/>
                    <path d="M13.386 13.8174C15.3742 13.8174 16.9872 12.2464 16.9872 10.3099C16.9872 8.37351 15.3742 6.80244 13.386 6.80244C11.3979 6.80244 9.78489 8.37351 9.78489 10.3099C9.78489 12.2464 11.3979 13.8174 13.386 13.8174ZM16.587 14.5969C15.6787 14.5969 14.7879 14.8571 13.8852 14.9587C13.7213 14.9771 13.5548 14.9866 13.386 14.9866C13.2172 14.9866 13.0507 14.9771 12.8869 14.9586C11.9842 14.8569 11.0935 14.5969 10.185 14.5969C8.41696 14.5969 6.98401 15.9926 6.98401 17.7147V18.1044C6.98401 18.7499 7.52168 19.2736 8.18439 19.2736H18.5877C19.2504 19.2736 19.788 18.7499 19.788 18.1044V17.7147C19.788 15.9926 18.3551 14.5969 16.587 14.5969Z" fill="black"/>
                  </svg>
              <a class="nav-link btn text-white me-3 nav-link-font" data-bs-toggle="modal" data-bs-target="#authModal">Вход</a>
              <a class="btn nav-link text-white nav-link-font" data-bs-toggle="modal" data-bs-target="#regModal">Регистрация</a>
            </div>

            <?php endif; ?>
      </div>
    </div>
  </header>
<header class="p-3 main-header">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/ground-black" class="d-flex align-items-center mb-2 mb-lg-0 me-5 text-white text-decoration-none">
          <img class="logo" src="/ground-black/assets/img/logo.png" alt="logo-website">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/ground-black" class="nav-link px-2 text-white nav-link-font">Главная</a></li>
          <li><a href="/ground-black/pages/catalog.php" class="nav-link px-2 text-white nav-link-font">Каталог</a></li>
          <li><a href="#" class="nav-link px-2 text-white nav-link-font">Магазины</a></li>
          <li><a href="/ground-black/pages/aboutme.php" class="nav-link px-2 text-white nav-link-font">О нас</a></li>
          <li><a href="/ground-black/pages/contactus.php" class="nav-link px-2 text-white nav-link-font">Контакты</a></li>
        </ul>


        

            <div>
              <button type="button" class="btn btn me-2 nav-link-font" style="text-align: center; background-color: black; border-radius: 10px; color: white; min-height: 39px">Связь с нами</button>
              <a href="/ground-black/pages/favorite.php" class="btn btn me-2" style="background-color: black">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>
              </a>
              <a class="btn btn" style="background-color: black" href="/ground-black/pages/cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
          </a>
            </div>
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
    <label for="validationCustom01" class="form-label">Имя</label>
    <input type="text" name="name" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Никнейм</label>
    <input type="text" name="username" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Почта</label>
    <input type="email" name="email" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Пароль</label>
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
    <label for="validationCustom02" class="form-label">Никнейм</label>
    <input type="text" name="username" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Почта</label>
    <input type="email" name="email" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Пароль</label>
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