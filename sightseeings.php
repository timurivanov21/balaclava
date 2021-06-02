<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/eagle.ico"/>
  <link rel="stylesheet" href="css/style.css">
  <title>Достопримечательности</title>
</head>
<body>

  <?php
    include('header.php');
  ?>
  <div class="line sightseeings-line"></div>

  <section class="attractions sightseeings">
    <div class="container">
      <h2 class="attractions-title sightseeings-title">Достопримечательности Балаклавы</h2>
      <div class="attractions-wrap sightseeings-wrap">
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img3.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Военно-морской музей Балаклава (Музей подводных лодок)</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img2.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Храм Двенадцати апостолов, Балаклава</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img1.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Фортификационное сооружение, крепость Чембало</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img4.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">19 батарея Драпушко, Балаклава</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img5.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Бочка смерти, Балаклава</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img6.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Мыс Айя, Балаклава</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img7.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Винзавод Золотая балка, Балаклава</p>
          </div>
        </div>
        <div class="attractions-item sightseeings-item" onclick="window.location.href='museum.php'">
          <img src="img/index/attractions/attractions-img8.jpg" alt="Достопримечательность Балаклавы" class="attractions-item__img">
          <div class="attractions-item__wrap">
            <span class="attractions-item__date sightseeings-item__date"></span>
            <p class="attractions-item__name sightseeings-item__name">Форт Северная Балаклава, Балаклава</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="line"></div>
  <?php
    include('footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
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
</body>
</html>