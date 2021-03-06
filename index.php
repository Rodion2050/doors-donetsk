<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>My Door</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/common.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include "include/header.php"?>

    <div class="container-fluid big-image-block">
        <div class="image-block-text">
            <div class="image-block-text-inner">
                <h1>МЕЖКОМНАТНЫЕ И ВХОДНЫЕ ДВЕРИ</h1>
                <p>Производство и монтаж дверей в Москве и Московской области</p>
                <a href="#image-block-text-2"><button class="btn green-button">Получить расчет</button></a>
            </div>
        </div>
    </div>

    <div class="container products">
        <h2><span class="main">ПОПУЛЯРНЫЕ</span> МОДЕЛИ</h2>
        <div class="popular-models">
            <div class="doors-wrapper">
                <div class="door">
                    <img class="door-image" src="images/door1.png">
                    <p class="door-name text-center">Дверь Stripes</p>
                    <p class="door-price text-center">7 500 РУБ.</p>
                </div>
                <div class="door">
                    <img class="door-image" src="images/door2.png">
                    <p class="door-name text-center">Дверь Minimalist</p>
                    <p class="door-price text-center">9 500 РУБ.</p>
                </div>
            </div>
            <div class="doors-wrapper">
                <div class="door">
                    <img class="door-image" src="images/door3.png">
                    <p class="door-name text-center">Дверь Luxury</p>
                    <p class="door-price text-center">35 000 РУБ.</p>
                </div>
                <div class="door">
                    <img class="door-image" src="images/door4.png">
                    <p class="door-name text-center">Дверь Guard</p>
                    <p class="door-price text-center">27 500 РУБ.</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="catalog.php"><button class="btn green-button text-center">Весь каталог >></button></a>
        </div>
    </div>
    
    <div class="container-fluid reasons-to-choose-background">
        <div class="container reasons-to-choose">
            <h2>
                <span class="main">ГЛАВНЫЕ ПРИЧИНЫ</span> ВЫБРАТЬ НАС</h2>
            <div class="row">
                <div class="col-md-6 info-with-image-in-border">
                    <div class="image-block">
                        <img src="images/img-back2.png" />
                        <img src="images/time.png" />
                    </div>
                    <div class="text-block">
                        <h3>БЫСТРОЕ ИСПОЛНЕНИЕ</h3>
                        <p>От приема заказа до доставки и установки дверей проходит не более 14 дней.</p>
                    </div>
                </div>

                <div class="col-md-6 info-with-image-in-border">
                    <div class="image-block">
                        <img src="images/img-back2.png" />
                        <img src="images/safe.png" />
                    </div>
                    <div class="text-block">
                        <h3>ПОВЫШЕННАЯ ПРОЧНОСТЬ</h3>
                        <p>Надежные входные двери из особо прочной стали, устойчивой к взлому.</p>
                    </div>
                </div>

                <div class="col-md-6 info-with-image-in-border">
                    <div class="image-block">
                        <img src="images/img-back2.png" />
                        <img src="images/price.png" />
                    </div>
                    <div class="text-block">
                        <h3>ЦЕНА ОТ ПРОИЗВОДИТЕЛЯ</h3>
                        <p>Благодаря собственному производству вы получаете дверь по доступной цене.</p>
                    </div>
                </div>

                <div class="col-md-6 info-with-image-in-border">
                    <div class="image-block">
                        <img src="images/img-back2.png" />
                        <img src="images/work.png" />
                    </div>
                    <div class="text-block">
                        <h3>РАБОТА ПОД ЗАКАЗ</h3>
                        <p>Принимаем заказы на изготовление конструкции любой сложности </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid big-image-block" id="image-block2">
        <div class="image-block-text" id="image-block-text-2">
            <div class="image-block-text-inner">
                <h2>Заполните форму</h2>
                <p>чтобы узнать, сколько будет стоить ваша дверь.</p>
                <form method="POST" id="form">
                    <input type="hidden" name="DATA[TITLE]" value="Заявка с лендинга №1"/>
                    <input type="text" class="form-control my-form-control" placeholder="Ваше имя*" name="DATA[NAME]" required />
                    <input type="tel" class="form-control my-form-control" placeholder="Ваш телефон*" name="DATA[PHONE_WORK]" required />
                    <input type="email" class="form-control my-form-control" placeholder="Ваш email*" name="DATA[EMAIL_WORK]" required />
                    <button type="submit" class="btn green-button">Получить расчет</button>
                </form>

            </div>
        </div>
    </div>

    
    <div id="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af66e4ef8136c15a2e5b1d23b81564af4531e1a09aede30eabf8fc8352c481d70&amp;width=100%25&amp;height=560&amp;lang=ru_UA&amp;scroll=true"></script>
        <div class="map-descr-wrapper">
            <div class="map-description">
                <img id="map-img-background" src="images/img-back4.png" />
                <img id="map-img" src="images/map-doors.png" />
                <h3>Мы на карте</h3>
            </div>
        </div>
    </div>


    <?php include "include/footer.php"?>
</body>

</html>