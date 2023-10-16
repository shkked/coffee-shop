<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php include ("../modules/header.php"); ?>
    <main>
        <div class="container">
        
            <section>
                <h1 class="text-center mt-5">Личный кабинет</h1>
                <?php 
include("../modules/db.php");
$id = $_COOKIE['id'];
$result = $conn->query("SELECT * FROM `users` WHERE `id` = '$id'");
$user = $result -> fetch_assoc();

if($user):
?> 
                <div class="d-flex flex-column align-center">
                    <p><strong>Ваши данные</strong></p>
                    <p>Ваше имя: <span><?php echo $user['name'];?></span></p>
                    <p>Ваш username: <span><?php echo $user['username'];?></span></p>
                    <p>Ваш email: <span><?php echo $user['email'];?></span></p>
                </div>
                <?php 
                else:
                ?>
                <div class="d-flex flex-column align-center">
                    <p><strong>Ваши данные не найдены!</strong></p>
                </div>
                <?php 
                endif;
                ?>
            </section>
        </div>

    </main>
    <?php include ("../modules/footer.php"); ?>
</body>
</html>