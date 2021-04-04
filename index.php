<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Hunters</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f604acbea6.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="col-12 col-lg-4 logo">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="add-text">
                <div class="row justify-content-center">
                    <img src="images/contact-icon.png" alt="">
                </div>
                <form id="ajax_form" action="" method="post">
                    <div class="form-row">
                        <div class="col-sm-5 fields">
                            <div class="form-group">
                                <label for="name">Имя <nobr style="color: red;">*</nobr></label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="mail">E-mail <nobr style="color: red;">*</nobr></label>
                                <input type="email" class="form-control" name="email" id="mail" required>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label for="msg">Комментарий <nobr style="color: red;">*</nobr></label>
                            <textarea name="message" class="form-control" id="msg" cols="30" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="button row justify-content-end">
                        <button type="submit">Записать</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main class="container">
        <h2>Выводим комментарии</h2>
        <div class="cards">

        </div>
    </main>

    <footer>
        <div class="container">
            <div class="col-12 col-lg-3 logo">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="col-12 col-lg-3 socials">
                <div class="social">
                    <a href="https://vk.com" class="social_link"><i class="fab fa-vk fa-lg"></i></a>
                </div>
                <div class="social">
                    <a href="https://facebook.com" class="social_link"><i class="fab fa-facebook-f fa-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="./ajax.js"></script>
</body>

</html>