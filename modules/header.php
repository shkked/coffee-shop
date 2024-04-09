<header class="p-3 border-bottom top-header bg-white text-black" style="border-bottom: 1px solid black !important">
    <div class="container-user">
      <div class="d-flex row flex-lg-wrap align-items-center justify-content-sm-center justify-content-lg-start">

        <ul class="nav col-7 col-md-8 col-lg-auto me-lg-auto mb-2 d-flex flex-sm-row flex-column justify-content-lg-center mb-md-0">
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#pickerCity" class="nav-link px-2 text-black sub-header-font">
            г. <span class="city-current">Москва</span>
          <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
            <path d="M6.98486 9.74365L0.344238 3.10303C-0.114746 2.64404 -0.114746 1.90186 0.344238 1.44775L1.44775 0.344238C1.90674 -0.114746 2.64893 -0.114746 3.10303 0.344238L7.81006 5.05127L12.5171 0.344238C12.9761 -0.114746 13.7183 -0.114746 14.1724 0.344238L15.2759 1.44775C15.7349 1.90674 15.7349 2.64893 15.2759 3.10303L8.63525 9.74365C8.18604 10.2026 7.44385 10.2026 6.98486 9.74365Z" fill="black"/>
          </svg>
          </a></li>
          <li class="ms-lg-5 ms-md-2"><a href="/pages/howtomake.php" class="nav-link px-2 text-black sub-header-font">Как приготовить кофе?</a></li>
          <li class="ms-lg-5 ms-md-2"><a href="/pages/howtopick.php" class="nav-link px-2 text-black sub-header-font">Как выбрать кофе?</a></li>
        </ul>
        
        
        <?php if(isset($_COOKIE['role'])): ?>
          <div class="d-flex flex-column col-5 flex-sm-row col-md-4 col-lg-auto align-items-end align-items-sm-center justify-content-md-end pe-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="dark" class="bi bi-person-fill pe-2 pe-sm-0 me-sm-3" viewBox="0 0 27 27">
                    <rect width="26.7721" height="26.076" rx="10" fill="dark"/>
                    <path d="M13.386 13.8174C15.3742 13.8174 16.9872 12.2464 16.9872 10.3099C16.9872 8.37351 15.3742 6.80244 13.386 6.80244C11.3979 6.80244 9.78489 8.37351 9.78489 10.3099C9.78489 12.2464 11.3979 13.8174 13.386 13.8174ZM16.587 14.5969C15.6787 14.5969 14.7879 14.8571 13.8852 14.9587C13.7213 14.9771 13.5548 14.9866 13.386 14.9866C13.2172 14.9866 13.0507 14.9771 12.8869 14.9586C11.9842 14.8569 11.0935 14.5969 10.185 14.5969C8.41696 14.5969 6.98401 15.9926 6.98401 17.7147V18.1044C6.98401 18.7499 7.52168 19.2736 8.18439 19.2736H18.5877C19.2504 19.2736 19.788 18.7499 19.788 18.1044V17.7147C19.788 15.9926 18.3551 14.5969 16.587 14.5969Z" 
                    fill="white"/>
                </svg>
              <a href="/pages/account.php" class="nav-link btn text-black p-2 p-sm-0 me-sm-3 sub-header-font">Вы – <?php echo $_COOKIE['userName']; ?></a>
              <a href="/modules/exit.php" class="nav-link btn text-black p-2 p-sm-0 me-sm-3 sub-header-font">Выйти</a>
            </div>
          
          <?php else: ?>

            <div class="d-flex flex-column col-5 flex-sm-row col-md-4 col-lg-auto align-items-end align-items-sm-center justify-content-md-end pe-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="dark" class="bi bi-person-fill me-sm-3 pe-2 pe-sm-0" viewBox="0 0 27 27">
                    <rect width="26.7721" height="26.076" rx="10" fill="dark"/>
                    <path d="M13.386 13.8174C15.3742 13.8174 16.9872 12.2464 16.9872 10.3099C16.9872 8.37351 15.3742 6.80244 13.386 6.80244C11.3979 6.80244 9.78489 8.37351 9.78489 10.3099C9.78489 12.2464 11.3979 13.8174 13.386 13.8174ZM16.587 14.5969C15.6787 14.5969 14.7879 14.8571 13.8852 14.9587C13.7213 14.9771 13.5548 14.9866 13.386 14.9866C13.2172 14.9866 13.0507 14.9771 12.8869 14.9586C11.9842 14.8569 11.0935 14.5969 10.185 14.5969C8.41696 14.5969 6.98401 15.9926 6.98401 17.7147V18.1044C6.98401 18.7499 7.52168 19.2736 8.18439 19.2736H18.5877C19.2504 19.2736 19.788 18.7499 19.788 18.1044V17.7147C19.788 15.9926 18.3551 14.5969 16.587 14.5969Z" 
                    fill="white"/>
                  </svg>
              <a class="nav-link btn text-black me-sm-3 sub-header-font p-2 p-sm-0" data-bs-toggle="modal" data-bs-target="#authModal">Вход</a>
              <a class="btn nav-link text-black sub-header-font p-2 p-sm-0" data-bs-toggle="modal" data-bs-target="#regModal">Регистрация</a>
            </div>

            <?php endif; ?>
      </div>
    </div>
</header>
<header class="p-3 main-header">
    <div class="container-user">
      <div class="d-flex flex-wrap row align-items-center justify-content-between justify-content-sm-start">
        <a href="/" class="d-flex px-md-0 px-lg-2 col-5 col-md-2 align-items-center ms-lg-3 mb-2 mb-lg-0 me-md-2 me-lg-5 text-white text-decoration-none">
          <img class="logo" src="/assets/img/logo.png" alt="logo-website">
        </a>
          <button 
            class="navbar-toggler d-sm-none bg-black rounded col-2 d-flex align-items-center justify-content-center"
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasDarkNavbar" 
            aria-controls="offcanvasDarkNavbar" 
            aria-label="Toggle navigation">
              <img src="../node_modules/bootstrap-icons/icons/list.svg" class="menu-list" alt="menu">
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Меню</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body row">
            <div class="d-flex col-md-1 col-4 col-lg-auto px-md-0 px-lg-2 flex-column align-items-center header-btns">
              <a data-bs-toggle="modal" data-bs-target="#contactus" type="button" class="d-flex w-100 d-md-none d-lg-flex align-items-center justify-content-center p-2 btn sub-header-font" style="text-align: center; background-color: black; border-radius: 10px; color: white; min-height: 39px">
                Связь с нами
              </a>
              <a href="/pages/favorite.php" class="btn d-flex m-2 w-100 align-items-center justify-content-center" style="background-color: black">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </a>
              <a class="btn d-flex w-100 align-items-center justify-content-center" style="background-color: black" href="/pages/cart.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
              </a>
            </div>
                <ul class="nav order-first col-md-8 col-4 d-flex flex-column align-items-start col-lg-auto me-lg-auto mb-2 justify-content-lg-center mb-md-0">
                  <li><a href="/" class="pointer nav-link px-2 text-white nav-link-font">Главная</a></li>
                  <li><a href="/pages/catalog.php" class="pointer nav-link px-2 text-white nav-link-font">Каталог</a></li>
                  <li><a href="#" class="pointer nav-link px-2 text-white nav-link-font">Магазины</a></li>
                  <li><a href="/pages/aboutme.php" class="pointer nav-link px-2 text-white nav-link-font">О нас</a></li>
                  <li><a href="/pages/contactus.php" class="pointer nav-link px-2 text-white nav-link-font">Контакты</a></li>
                </ul>
            </div>
          </div>
        <ul class="nav col-md-8 col-lg-auto me-lg-auto d-none d-sm-flex mb-2 justify-content-lg-center mb-md-0">
          <li><a href="/" class="pointer nav-link px-2 text-black nav-link-font">Главная</a></li>
          <li><a href="/pages/catalog.php" class="pointer nav-link px-2 text-black nav-link-font">Каталог</a></li>
          <li><a href="#" class="pointer nav-link px-2 text-black nav-link-font">Магазины</a></li>
          <li><a href="/pages/aboutme.php" class="pointer nav-link px-2 text-black nav-link-font">О нас</a></li>
          <li><a href="/pages/contactus.php" class="pointer nav-link px-2 text-black nav-link-font">Контакты</a></li>
        </ul>


        

            <div class="d-none d-sm-flex col-md-1 col-lg-auto px-md-0 px-lg-2 flex-row align-items-center header-btns">
              <a data-bs-toggle="modal" data-bs-target="#contactus" type="button" class="d-flex d-md-none d-lg-flex align-items-center mb-0 btn sub-header-font me-2" style="text-align: center; background-color: black; border-radius: 10px; color: white; min-height: 39px">
                Связь с нами
              </a>
              <a data-bs-toggle="modal" data-bs-target="#contactus" type="button" class="d-flex d-lg-none align-items-center justify-content-center mb-0 btn me-2" style="background-color: black; ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
              </a>
              <a href="/pages/favorite.php" class="btn d-flex align-items-center justify-content-center me-2" style="background-color: black">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </a>
              <a class="btn d-flex align-items-center justify-content-center" style="background-color: black" href="/pages/cart.php">
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
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/modules/reg.php" method="POST" class="row g-3 needs-validation-reg">
        <div class="col-md-4">
          <label for="validationName" class="form-label">Имя</label>
          <input type="text" name="name" class="form-control" id="validationName"
          pattern="[А-Яа-я]+"
          required>
          <div class="valid-feedback">
            Отлично!
          </div>
          <div class="invalid-feedback">
            Введите правильное имя
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationImg" class="form-label">Изображение</label>
          <input type="file" name="img" class="form-control" id="validationImg">
          <div class="valid-feedback">
            Отлично!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationPhone" class="form-label">Номер телефона</label>
          <input type="text" name="tel" class="form-control" id="validationPhone" 
          required
          placeholder="+7 (999) 999-99-99"
          title="Номер телефона">
          <div class="valid-feedback">
            Отлично!
          </div>
          <div class="invalid-feedback">
            Введите правильный номер телефона
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationEmal" class="form-label">Почта</label>
          <input type="email" name="email" class="form-control" id="validationEmail"
          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          required>
          <div class="valid-feedback">
            Отлично!
          </div>
          <div class="invalid-feedback">
            Введите правильную почту
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationPass" class="form-label">Пароль</label>
          <input type="password" name="pass" class="form-control" id="validationPass" required>
          <div class="valid-feedback">
            Отлично!
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Регистрация</button>
        </div>
        <div>
          <p class="amiko-font text-black">Зарегистрированы? <a style="text-decoration: underline; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#authModal">Войдите</a></p>
        </div>
</form>
      </div>
    </div>
  </div>
    </div>
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content contact-form">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="authModal">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/modules/auth.php" method="GET" class="row g-3 needs-validation">
  <div class="col-md-4">
    <label for="email" class="form-label">Почта</label>
    <input type="email" name="email" class="form-control" id="email" required>
    <div class="valid-feedback">
      Отлично!
    </div>
  </div>
  <div class="col-md-4">
    <label for="pass" class="form-label">Пароль</label>
    <input type="password" name="pass" class="form-control" id="pass" required>
    <div class="valid-feedback">
      Отлично!
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
    <div class="modal fade" id="contactus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title ps-2 fs-5 nav-link-font h2-title my-0" id="exampleModalLabel">Связь с нами</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4">
            <section class="d-flex align-center flex-column justify-center">
                <p class="text-center mt-4 mb-4 amiko-font text-black">Остались вопросы? Есть предложения? Воспользуйтесь формой ниже</p>
                <div class="contact-form">
                    <form id="contactUs" name="contactForm" class="d-flex flex-column justify-center align-center" action="/modules/contactForm.php" method="POST">
                        <div>
                            <input type="text" name="name" placeholder="Как вас зовут?" required>
                            <input type="email" name="email" placeholder="Введите почту" required>
                            <input type="text" name="question" placeholder="Какой вопрос вас интересует?" required>
                        </div>
                        <textarea name="message" cols="30" rows="10" placeholder="Ваше сообщение" required></textarea>
                        <button class="mt-3 mx-auto" type="submit">Отправить заявку</button>
                    </form>
                </div>
            </section>
      </div>
    </div>
  </div>
    </div>
    <div class="modal fade" id="pickerCity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title ps-2 fs-5 nav-link-font h2-title my-0" id="exampleModalLabel">Выбор города</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4">
            <section class="d-flex align-center flex-row justify-center cityMain">
              <div class="col-3"><p class="cityPick text-start amiko-font text-black">Москва</p></div>
              <div class="col-3"><p class="cityPick text-start amiko-font text-black">Санкт-Петербург</p></div>
              <div class="col-3"><p class="cityPick text-start amiko-font text-black">Нижний Новгород</p></div>
              <div class="col-3"><p class="cityPick text-start amiko-font text-black">Мытищи</p></div>
            </section>
      </div>
    </div>
  </div>
    </div>