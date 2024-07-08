<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground black</title>
    <?php include("../modules/links.php") ?>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container-user">
            <?php 
            $pagetitle = ["Контакты"];
            $pageurl = ["/pages/contactus.php"];
            include ("../modules/breadcrumbs.php"); 
            ?>
            <section class="d-flex align-center flex-column justify-center contact-us">
                <h1 class="text-start mt-0 mt-lg-5 nav-link-font h2-title">Наши контакты</h1>
                <p class="sub-header-font text-black" style="font-size: 18px">Находимся по адресу <a target="_blank" href="https://yandex.ru/maps/213/moscow/house/pyatnitskaya_ulitsa_16s3/Z04YcAVnSkIEQFtvfXt1c3lgbQ==/?ll=37.628471%2C55.742493&utm_medium=mapframe&utm_source=maps&z=17.89" class="underlined text-black">Пятницкая улица, 16с3</a> в двух минутах от метро 🚇 <span class="underlined">Новокузнецкая</span></p>
                <div class="map w-100">
                  <div style="position:relative; overflow:hidden;">
                  <a 
                  href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" 
                  style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a>
                  <a 
                  href="https://yandex.ru/maps/213/moscow/house/pyatnitskaya_ulitsa_16s3/Z04YcAVnSkIEQFtvfXt1c3lgbQ==/?ll=37.628471%2C55.742493&utm_medium=mapframe&utm_source=maps&z=17.89" 
                  style="color:#eee;font-size:12px;position:absolute;top:14px;">Пятницкая улица, 16с3 — Яндекс Карты</a>
                  <iframe src="https://yandex.ru/map-widget/v1/?ll=37.628471%2C55.742493&mode=whatshere&whatshere%5Bpoint%5D=37.627282%2C55.742564&whatshere%5Bzoom%5D=17&z=17.89" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative; border-radius: 10px"></iframe>
                  </div>
                </div>
                <div class="d-flex justify-content-between row px-0 align-center contact-info">
                  <p class="col-6 col-lg-4 text-center text-lg-start mt-4 mb-2 sub-header-font text-black" style="font-size: 18px">
                    <strong>Телефон для связи <br/></strong>
                    <a class="text-black" href="tel:8 (999) 222-11-44">8 (999) 222-11-44</a>
                  </p>
                  <p class="col-6 col-lg-4 text-center text-lg-center mt-4 mb-2 sub-header-font text-black" style="font-size: 18px">
                    <strong>Наша почта<br/> </strong>
                  <a class="text-black" href="mailto:groundblack@gmail">groundblack@gmail.com</a>
                  </p>
                  <p class="col-6 col-lg-4 text-center text-lg-end mt-4 mb-2 sub-header-font text-black" style="font-size: 18px">
                    <strong>Время работы<br/> </strong>Пн - Пт: 9.00 - 18.00 <br/> Сб: Вс: Выходной
                  </p>
                </div>
                <p class="text-start mt-4 mb-4 sub-header-font text-black" style="font-size: 18px">В нашем распоряжении точки в разных концах страны</p>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button sub-header-font" type="button" data-bs-toggle="collapse" data-bs-target="#Moscow" aria-expanded="true" aria-controls="Moscow">
                        Москва
                      </button>
                    </h2>
                    <div id="Moscow" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="d-flex justify-center">
                            <img class="w-100" src="../assets/img/moscow.webp" alt="">
                        </div>
                        <p class="mt-5 amiko-font text-black">Наш адрес: <a target="_blank" href="https://yandex.ru/maps/213/moscow/house/pyatnitskaya_ulitsa_16s3/Z04YcAVnSkIEQFtvfXt1c3lgbQ==/?ll=37.628471%2C55.742493&utm_medium=mapframe&utm_source=maps&z=17.89" class="underlined pointer text-black">Пятницкая улица, 16с3</a></p>
                        <p class="mt-2 amiko-font text-black">Здесь истинные ценители кофе найдут себе настоящее удовольствие. Расположенный по адресу ул. Пятницкая, 16с3, г. Москва, этот уютный магазин предлагает широкий ассортимент высококачественных сортов кофе различных вариаций: от ароматного эспрессо до нежного латте. 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed sub-header-font" type="button" data-bs-toggle="collapse" data-bs-target="#SPB" aria-expanded="false" aria-controls="SPB">
                        Санк-Петербург
                      </button>
                    </h2>
                    <div id="SPB" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <div class="d-flex justify-center">
                            <img class="w-100" src="../assets/img/spb.jpeg" alt="">
                        </div>
                        <p class="mt-5 amiko-font text-black">Наш адрес: <a target="_blank" href="https://yandex.ru/maps/-/CDFfYBiK" class="underlined pointer text-black">улица Рубинштейна, 24</a></p>
                        <p class="mt-2 amiko-font text-black">Здесь вы найдете широкий ассортимент высококачественных зерен из разных уголков мира, каждое из которых тщательно отбирается и обжаривается на месте для достижения идеального вкуса и аромата. В "Ground black" вас ждет уютная атмосфера и профессиональные бариста, готовые порадовать вас лучшими вариантами кофейных напитков. Не упустите возможность окунуться в мир настоящего кофе и насладиться его неповторимым вкусом в этом уютном магазине.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed sub-header-font" type="button" data-bs-toggle="collapse" data-bs-target="#NizNov" aria-expanded="false" aria-controls="NizNov">
                        Нижний Новгород
                      </button>
                    </h2>
                    <div id="NizNov" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <div class="d-flex justify-center">
                            <img class="w-100" src="../assets/img/niznov.jpeg" alt="">
                        </div>
                        <p class="mt-5 amiko-font text-black">Наш адрес: <a target="_blank" href="https://yandex.ru/maps/-/CDFf4E16" class="underlined pointer text-black">площадь Минина и Пожарского, 2</a></p>
                        <p class="mt-2 amiko-font text-black">"Ground Black" - ваша оазис в мире кофе на площади Минина и Пожарского в Нижнем Новгороде. У нас вы найдете самые ароматные сорта кофе, внимательно отобранные и обжаренные для настоящих ценителей. Здесь каждая чашка - история, наполненная бодростью и утонченным вкусом. Приходите к нам, чтобы ощутить настоящее удовольствие от чашки кофе.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed sub-header-font" type="button" data-bs-toggle="collapse" data-bs-target="#MYT" aria-expanded="false" aria-controls="MYT">
                        Мытищи
                      </button>
                    </h2>
                    <div id="MYT" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <div class="d-flex justify-center">
                            <img class="w-100" src="../assets/img/myt.webp" alt="">
                        </div>
                        <p class="mt-5 amiko-font text-black">Наш адрес: <a target="_blank" href="https://yandex.ru/maps/-/CDFfaKKR" class="underlined pointer text-black">ул. Мира, с51</a></p>
                        <p class="mt-2 amiko-font text-black">"Ground Black" - ваша точка назначения для истинных ценителей кофе на улице Мира в Мытищах. Здесь каждая зерновка кофе тщательно отобрана и обжарена с любовью, чтобы подарить вам неповторимый аромат и насыщенный вкус. Наши эксперты помогут вам подобрать идеальный сорт, чтобы каждая чашка стала незабываемым впечатлением. Погрузитесь в мир кофейной культуры с "Ground Black".</p>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>