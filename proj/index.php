<?
  require 'php/DB.class.php';
  $result = new DB();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Богдан Пономаренко | Front-End Разработчик</title>
    <meta name="Keywords" content="Богдан, Пономаренко, Создание сайтов, Front-end, web, html, css"/>
    <meta name="Description" content="Пономаренко Богдан"/>
    <meta name="robots" content="all"/>
    <!-- build:css css/style.css -->
  <!-- bower:css -->
  <!-- endbower -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <!-- end build -->
  <!-- build:js js/modernizr.js -->
  <script src="js/vendor/modernizr.js"></script>
  <!-- end build -->
  <!--[if lte IE 9]>
<!-- build:js js/respond.js -->
  <script src="js/vendor/respond.js"></script>
  <!-- end build -->
  <!--<[endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
  <!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
  <? require 'sprite.php' ?>
  <div class="wrapper">
    <div class="nav">
      <ul class="nav__menu">
        <li class="nav__menu-item"><a href="#" class="nav__menu-link" data-block="about">Обо мне</a>
        </li>
        <li class="nav__menu-item"><a href="#" class="nav__menu-link" data-block="portfolio">Работы</a>
        </li>
        <li class="nav__menu-item"><a href="#" class="nav__menu-link" data-block="form">Контакты</a>
        </li>
      </ul>
    </div>
    <div class="show-btn"><a href="#" class="show"><span class="show-menu"></span></a>
    </div>
    <div class="header">
      <div class="header-text">
        <h1 class="author-name">Богдан Пономаренко</h1>
        <h3 class="author-prof"> front-end разработчик</h3>
          <div class="scroll-down">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="166 280.5 284.6 231">
                      <g>
                          <polygon fill="#FFFFFF"
                                   points="450.6,384.5 441.4,372.3 308.3,490.1 175.2,372.3 166,384.5 308.3,511.5 	"/>
                          <polygon fill="#FFFFFF"
                                   points="450.6,292.7 441.4,280.5 308.3,398.3 175.2,280.5 166,292.7 308.3,419.7 	"/>
                      </g>
                  </svg>
                    <p class="scroll-text">SCROLL!</p>
          </div>
      </div>

    </div>
    <div class="about">
      <div class="about__block">
        <h1 class="container-name container-name_blue">Обо мне</h1>
        <div class="about__pics">
          <ul class="about__pics__list">
            <li class="about__pics-item">
                <svg>
                    <use xlink:href="#html5"/>
                </svg>
            </li>
            <li class="about__pics-item">
                <svg>
                    <use xlink:href="#css3"/>
                </svg>
            </li>
            <li class="about__pics-item about__pics-item_photo">
                <img src="/img/pic.jpg" alt="my photo" class="photo"/>
            </li>
            <li class="about__pics-item">
                <svg>
                    <use xlink:href="#js"/>
                </svg>
            </li>
            <li class="about__pics-item">
                <svg>
                    <use xlink:href="#wordpress"/>
                </svg>
            </li>
          </ul>
        </div>
        <div class="about__text">
          <p>Привет! Меня зовут Богдан, мне 19 лет и я веб-разработчик. Я обожаю спорт, музыку, математику и, естественно, программирование. Пролистнув ниже ты можешь увидеть мои работы. Но это не конец, я постоянно самосовершенствуюсь :) Поэтому если ты
            хочешь доверить мне создания сайта для себя, бабушки, своего интернет-магазина или же просто хочешь пообщаться, то отправь мне письмо через контактую форму внизу страницы и я обязательно свяжусь с тобой! Если же ты начинающий веб-разработчик
            или программист, то мой тебе совет: нажми <a href="http://loftblog.ru" target="_blank">сюда</a> и перед тобой откроется удивительный мир интернет-технологий. Успехов!</p>
        </div>
      </div>
      <div class="about__block">
        <h1 class="container-name container-name_blue">Навыки</h1>
        <ul class="about__skills__list">
          <li class="about__skills-item"><span>HTML</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_html"></div>
            </div>
          </li>
          <li class="about__skills-item"><span>CSS</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_css"></div>
            </div>
          </li>
          <li class="about__skills-item"><span>JAVASCRIPT</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_javascript"></div>
            </div>
          </li>
          <li class="about__skills-item"><span>PHP</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_php"></div>
            </div>
          </li>
          <li class="about__skills-item"><span>WORDPRESS</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_wordpress"></div>
            </div>
          </li>
          <li class="about__skills-item"><span>WEB-ДИЗАЙН</span>
            <div class="about__skills-line">
              <div class="about__skills-innerLine about__skills-innerLine_webdesign"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="portfolio">
      <div class="portfolio__block">
        <h1 class="container-name container-name_white">Работы</h1>
        <ul class="portfolio__list">
          <?
            for ($i = 0; $i < count($result->getDB()); $i++) {
              $arr = $result->getDB()[$i];
              echo <<<EOT
          <li class="portfolio__list-item">
            <a href="{$arr['link']}" class="portfolio__list-link">
              <img src="{$arr['img_link']}">
              <div class="link-name">{$arr['site_name']}</div>
            </a>
          </li>
EOT;
            }
          ?>
        </ul>
        <div class="feedback"><a href="#" class="feedback-link nav__menu-link" data-block="form">Связаться</a>
        </div>
      </div>
    </div>
    <div class="form">
      <div class="form__block">
        <h1 class="container-name container-name_blue">Контакты</h1>
        <form method="post">
            <span class="input input--chisato"><input type="text" name="name" id="input-1" class="input__field input__field--chisato"><label for="input-1" class="input__label input__label--chisato"><span data-content="Ваше имя" class="input__label-content input__label-content--chisato">Ваше имя</span>
          </label>
          </span><span class="input input--chisato"><input type="email" name="email" id="input-2" class="input__field input__field--chisato"><label for="input-2" class="input__label input__label--chisato"><span data-content="Ваш email" class="input__label-content input__label-content--chisato">Ваш email</span>
          </label>
          </span><span class="input input--chisato"><textarea id="input-3" name="about" class="input__field input__field--chisato"></textarea><label for="input-3" class="input__label input__label--chisato"><span data-content="Ваше сообщение" class="input__label-content input__label-content--chisato">Ваше сообщение</span>
          </label>
          </span>
          <input type="submit" value="Отправить" class="input-submit">
        </form>
      </div>
    </div>
    <div class="footer">
      <div class="footer__block">
        <h1 class="container-name container-name_white">Следуй за мной</h1>
        <ul class="socials">
          <li class="socials-item">
            <a href="http://vk.com/bogdan_ponomarenko" class="social-link">
                <svg>
                    <use xlink:href="#vk"></use>
                </svg>
            </a>
          </li>
          <li class="socials-item">
            <a href="http://twitter.com/bponomarenko95" class="social-link">
                <svg>
                    <use xlink:href="#tw"></use>
                </svg>
            </a>
          </li>
          <li class="socials-item">
            <a href="http://instagram.com/b_ponomarenko" class="social-link">
                <svg>
                    <use xlink:href="#instagram"></use>
                </svg>
            </a>
          </li>
          <li class="socials-item">
            <a href="#" class="social-link">
                <svg>
                    <use xlink:href="#fb"></use>
                </svg>
            </a>
          </li>
          <li class="socials-item">
            <a href="http://github.com/bogdan1995" class="social-link">
                <svg>
                    <use xlink:href="#github"></use>
                </svg>
            </a>
          </li>
          <li class="socials-item">
            <a href="skype:bogdasha1995" class="social-link">
                <svg>
                    <use xlink:href="#skype"></use>
                </svg>
            </a>
          </li>
        </ul>
        <p class="copyright">Все права защищены &copy; 2015</p>
      </div>
    </div>
  </div>
  <!-- build:js js/vendor.js -->
  <!-- bower:js -->
  <script src="bower_components/jquery/jquery.js"></script>
  <script src="bower_components/jquery-placeholder/jquery.placeholder.js"></script>
  <script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
  <!-- endbower -->
  <!-- endbuild -->
  <!-- build:js js/main.js -->
  <script src="js/main.js"></script>
  <noscript><div><img src="https://mc.yandex.ru/watch/31273938" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- endbuild -->
</body>
</html>