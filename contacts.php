<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="css/simple.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="shortcut icon" type="image/png" href="img/eagle.ico"/>
  <link rel="stylesheet" href="css/style.css">
  <title>Контакты</title>
</head>

<body>

  <?php
    include('header.php');
  ?>
  <div class="line all-line"></div>
  <div class="about contacts-about">
    <div class="container">
      <h2 class="about-title">Контакты</h2>
      <p class="about-text">
        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной 
        "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию 
        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил 
        без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время 
        послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы 
        электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
      </p>
    </div>
  </div>

  <div class="contacts">
    <div id="map"></div>
    <div class="contacts-overlap">
      <div class="contacts-info">
        <p class="contacts-info__addres">
          Россия, Крым, г. Балаклава<br>
          “Гостевой дом с орлами”
        </p>
        <ul class="contacts-info__list">
          <li class="contacts-info__list-item">Пн.-СБ.: 09:00–18:00</li>
          <li class="contacts-info__list-item"><a class="contacts-info__list-item__link" href="mailto:info@rus-sauna.com">info@rus-sauna.com</a></li>
          <li class="contacts-info__list-item"><a class="contacts-info__list-item__link" href="tel:80765767667">8 (0765) 76 76 67</a></li>
        </ul>
        <div class="contacts-info__img">
          <img src="img/contacts/map-img.jpg" alt="Фото Карты">
        </div>
      </div>
    </div>
  </div>

  <section class="backcom">
    <div class="container backcom-container">
      <h2 class="backcom-title backcom-title__center">Обратная связь</h2>
      <h2 class="backcom-title backcom-title__hidden">Мы в соцсетях</h2>
      <div class="backcom-wrap">
        <form action="recaptcha.php" class="feedback-form form-validate backcom-form" id="last-form">
          <div class="feedback-form__item backcom-form__item">
            <input type="text" class="feedback-form__item-input backcom-form__item-input" name="user_name" placeholder="Ваше имя...">
          </div>
          <div class="feedback-form__item backcom-form__item">
            <input type="email" class="feedback-form__item-input backcom-form__item-input" name="user_email" placeholder="Ваш e-mail..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          </div>
          <div class="feedback-form__textarea backcom-form__textarea">
            <textarea rows="6" name="user_message" placeholder="Ваше сообщение..."></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="6LdeF4IUAAAAAIazU0j4wKtiyXWvGqvQX9744SIl"></div>
          <button type="submit" class="btn backcom-form__button">Отправить</button>
        </form>
        <div class="backcom-social">
          <ul class="backcom-social__list">
            <li class="backcom-social__list-item"><a href="#" class="backcom-social__list-item__link">вконтакте</a></li>
            <li class="backcom-social__list-item"><a href="#" class="backcom-social__list-item__link">facebook</a></li>
            <li class="backcom-social__list-item"><a href="#" class="backcom-social__list-item__link">google +</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="line contacts-line"></div>
  <?php
    include('footer.php');
  ?>

  <!-- MODAL -->
  <div style="display: none;">
    <div class="box-modal" id="rentroom">
      <div class="box-modal_close arcticmodal-close">&#10006;</div>
      <div class="modal__dialog">
        <form action="#" class="feedback-form form-validate">
          <div class="feedback-form__item modal__item">
            <input type="text" class="feedback-form__item-input" name="user_name" placeholder="Ваше имя..." required>
          </div>
          <div class="feedback-form__item modal__item">
            <input type="tel" class="feedback-form__item-input" name="user_phone" id="phone1" placeholder="Ваш номер телефона..." required>
          </div>
          <div class="feedback-form__item modal__item">
            <input type="email" class="feedback-form__item-input" name="user_email" placeholder="Ваш e-mail..." required>
          </div>
          <div class="feedback-form__textarea">
            <textarea rows="4" name="user_message" placeholder="Ваше сообщение..." required></textarea>
          </div>
          <button type="submit" class="btn feedback-button modal-button">арендовать!</button>
        </form>
      </div>
    </div>
  </div>
  <!-- THANKS MODAL -->
  <div class="g-hidden" style="display: none;">
    <div class="box-modal" id="thanks-modal">
      <div class="box-modal_close arcticmodal-close close-close">&#10006;</div>
      <div class="modal__content">
        <h1 class="modal__content-title">Сообщение успешно доставлено!</h1>
        <div class="modal__content-img">
          <img src="img/thumbs-up.svg" alt="Палец вверх">
        </div>
        <span class="modal__content-subtitle">Мы свяжемся с вами в ближайшее время</span>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.arcticmodal-0.3.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=61df8a35-1f61-4db9-aa30-6b10f21ab0d3&lang=ru_RU"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- Yandex.Metrika counter --> 
  <script>
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(51598838, "init", { id:51598838, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); 
  </script> 
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/51598838" style="position:absolute; left:-9999px;" alt="" />
    </div>
  </noscript> 
  <!-- /Yandex.Metrika counter -->
  <script>
    $(document).ready(function (){

      ymaps.ready(init);
	
      function init() {
        var myMap = new ymaps.Map("map", {
          center: [44.500825, 33.590340],
          zoom: 13,
          controls: ['zoomControl']
        }, {
          searchControlProvider: 'yandex#search'
        });
        
        myMap.behaviors.disable('scrollZoom');
        
        myAdress = new ymaps.Placemark([44.501414, 33.600037], {
          balloonContentBody: "Заходите, будем рады видеть каждого!",
          iconCaption: "Балаклава"
        }, {
          iconLayout: 'default#image',
          iconImageHref: 'img/contacts/pin.png',
          iconImageSize: [34, 36],
          iconImageOffset: [-10, -40]
        }
        );
        myMap.geoObjects.add(myAdress);
        
      };

    });
  </script>
</body>

</html>