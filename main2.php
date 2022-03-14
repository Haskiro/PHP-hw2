<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__body container">
            <img src="/images/header/logo.png" alt="logo" class="header__logo">
            <p class="header__text">Feedback form</p>
        </div>
    </header>
    <main>
        <div class="feedback">
            <div class="feedback__body">
                <?php
                    $url = 'https://httpbin.org/';
                    $answer = get_headers($url);
                ?>
                <textarea type="text" name="feedback" class="feedback__textarea">
                    <?php
                      print_r($answer);
                    ?>
                </textarea>
            </div>
        </div>
    
    </main>
    <footer class="footer">
        <p class="footer__text">Задание для самостоятельно работы</p>
    </footer>
</body>
</html>