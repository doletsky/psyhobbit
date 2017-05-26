<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>27-28 мая "ДОВЕРЯЯ СЕБЕ"  психологическая группа</title>
    <meta name="keywords" content="обучение, консультация, психолог, помощь, москва, индивидуальное консультирование, психодрама, монодрама, сайт психолога" />
    <meta name="description" content="Обучение психодраме, консультация психолога, индивидуальная и групповая работа, психологическая помощь в Москве, психодрама и монодрама" />
    <link href="../css/main_ds.css" rel="stylesheet">
    <link href="../css/slider-div.css" rel="stylesheet">
    <link href="../fonts/beermoney.css" rel="stylesheet">
    <link href="../fonts/engine.css" rel="stylesheet">
    <link href="../fonts/fiveminutes.css" rel="stylesheet">
    <link href="../fonts/freeride.css" rel="stylesheet">
    <link href="../fonts/lionel.css" rel="stylesheet">
    <link href="../fonts/romochka.css" rel="stylesheet">
    <link href="../fonts/sunday.css" rel="stylesheet">
    <link href="../fonts/veles.css" rel="stylesheet">
    <link href="../fonts/yessireebob.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/slider-div.js"></script>
    <script src="../js/nicescroll/jquery.nicescroll.js"></script>
    <script src="../js/edu.js"></script>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29259340 = new Ya.Metrika({id:29259340,
                    webvisor:false,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29259340" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61150061-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="erorr"
     style='
    position: absolute;
    width: 760px;
    height: 400px;
    background-color: wheat;
    border: 6px solid #223C51;
    border-radius: 30px;
    left: 50%;
    top: 50%;
    margin-left: -380px;
    margin-top: -230px;
    text-align: center;
    z-index: 99999;
    font-size: 180%;
    font-family: "Five Minutes";
    padding: 30px;
     '>
    <b>Друзья!</b><br>Выяснилось, что у нас все время<br>не работала кнопка записи на группу "Отправить заявку"!!!  :(<br>
    Это означает, что мы не получили ни одной отправленной через него заявки! Группа отменена, но если вы записывались, а мы никак на это не отреагировали,<br>
    во-первых, примите наши искренние извинения,<br>
    а во-вторых, найдитесь, пожалуйста, личным сообщением в фейсбук или на почту.<br>
    <b>Александра Долецкая.</b> fb: <a href="https://www.facebook.com/alexandra.doletskaya">https://www.facebook.com/alexandra.doletskaya</a>,<br>e-mail: doletskaya@bk.ru<br>
    <b>Дарья Приходько.</b> fb: <a href="https://www.facebook.com/daria.prihodko">https://www.facebook.com/daria.prihodko</a> <br>
    Спасибо!
</div>
    <div style="position: absolute;z-index: 9999;width: 100%; height: 100%; background-color: #808080; opacity: 0.5"></div>
<div class="ver mobil edu">

    <div class="send">
        <input type="text" placeholder="Имя Фамилия"><br>
        <input type="text" placeholder="телефон или почта"><br>
        <input type="button" value="отправить заявку">
    </div>

    <div class="body-edu">
        <div class="imgback">
<!--            <h1 class="top">Московский Институт Гештальта и Психодрамы</h1>-->
            <h1 class="down">27-28 мая психологическая группа<br> "ДОВЕРЯЯ СЕБЕ"</h1>



        </div>
<!--        <div class="my"> и мы</div>-->
        <div class="ekat">Дарья Приходько</div>
<!--        <div class="and">и</div>-->
        <div class="alex">Александра Долецкая</div>
        <div class="counter-data cleft">
            <div class="title-counter">
                До начала осталось:
            </div>
        </div>
        <div class="red-line"></div>
        <div class="counter-data cright">
            <?php
            $startTime=mktime(10, 0, 0, 10, 14, 2016);
            $nowTime=time();
            $countTime=$startTime-$nowTime;
            $secDay=60*60*24;$secHour=60*60;
            $days= floor($countTime/$secDay);
            $hours=floor(($countTime-$days*$secDay)/$secHour);
            $minutes=floor(($countTime-$days*$secDay-$hours*$secHour)/60);
            $secs=$countTime-$days*$secDay-$hours*$secHour-$minutes*60;
            ?>
            <div id="ds" class="number"><span><?php if($days<10) echo '0'; echo $days?></span>
                <div class="subtitle-counter">Дней</div>
                <div class="dp">:</div>
            </div>
            <div id="hr" class="number"><span><?php if($hours<10) echo '0'; echo $hours?></span>
                <div class="subtitle-counter">Часов</div>
                <div class="dp">:</div>
            </div>
            <div id="min" class="number"><span><?php if($minutes<10) echo '0'; echo $minutes?></span>
                <div class="subtitle-counter">Минут</div>
                <div class="dp">:</div>
            </div>
            <div id="sec" class="number"><span><?php if($secs<10) echo '0'; echo $secs?></span>
                <div class="subtitle-counter">Секунд</div>
            </div>
        </div>
    </div>

<!--<div class="copyright">-->
<!--    &copy; Александра Долецкая. 2015-2016г.-->
<!--    </div>-->
</div>
<div class="shadow"></div>
<div class="popup">
    <span id="popup-name"></span>!<br>
    Ваша заявка отправлена!<br>
    Мы свяжеся с Вами<br>по указанным контактам!
</div>
<div class="close-popup">X</div>
</body>
</html>
