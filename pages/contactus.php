<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link type="image/x-icon" href="/ground-black/assets/img/logo.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/ground-black/assets/img/logo.ico" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <script defer src="../assets/script/script.js"></script>
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        
<!-- <div class="modal fade" id="qwe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 0px; height: 200px;">
    <div class="modal-header" style="border-bottom: 0 !important;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height: 100%">
        <p style="font-size: 20px">Ваша заявка успешно отправлена</p>
        </div>
    </div>
  </div>
    </div>
    <button >qwe</button> -->

        <div class="container">
            <section class="d-flex align-center flex-column justify-center">
                <h1 class="mt-5">Связь с нами</h1>
                <p class="text-center mt-4 mb-4">Остались вопросы? Есть предложения? Воспользуйтесь формой ниже</p>
                <div class="contact-form">
                    <form id="contactUs" name="contactForm" class="d-flex flex-column justify-center align-center" action="../modules/contactForm.php" method="POST">
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

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>