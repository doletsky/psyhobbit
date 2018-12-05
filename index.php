<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Александра Долецкая. Консультация психолога.</title>
    <meta name="keywords" content="консультация, психолог, помощь, москва, индивидуальное консультирование, психодрама, монодрама, сайт психолога" />
    <meta name="description" content="Консультация психолога, индивидуальная и групповая работа, психологическая помощь в Москве, психодрама и монодрама" />
    <meta name="yandex-verification" content="9bf9fce94b1ce52a" />
    <link href="css/main.css" rel="stylesheet">
    <link href="css/slider-div.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider-div.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.js"></script>

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


<div class="ver mobil">
    <div class="position">
        <div class="person">
            <div class="foto"></div>
            <div class="name">Александра Долецкая</div>
            <div class="subtitle">психолог, психотерапевт</div>
            <div class="phone">+7(926)389-01-54</div>
            <div class="mail">doletskaya@bk.ru</div>
            <div class="subtitle i">взрослым, желающим быть ещё счастливее</div>
            <div class="action">
                <a class="get_consult" href="#wincons">Записаться на консультацию</a><br>
                <?php if(0):?><a href="map.html" target="_blank" onClick="popupWin = window.open(this.href, 'contacts', 'location,width=600,height=600,top=0'); popupWin.focus(); return false;" class="load-map">Где проходят консультации</a><?php endif?>
            </div>
        </div>
        <div class="win_get_consult">
            <div class="win_get_consult_header">Запись на консультацию<span class="close">x</span> </div>
            <div class="win_get_consult_body">
                <input type="hidden" id="GCform" name="formName" value="getCons">
                <table>
                    <tr>
                        <td>
                            Имя:
                        </td>
                        <td>
                            <input id="GCname" type="text" size="50" placeholder="Как к Вам обращаться">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Тел./email:
                        </td>
                        <td>
                            <input id="GCcontacts" type="text" size="50" placeholder="Удобный для Вас способ связи">
                        </td>
                    </tr>
                </table><br>
                <u>Тема консультации:</u><br>
                <textarea id="GCtext" rows="10" cols="68" placeholder="Кратко опишите Вашу тему для консультирования"></textarea><br>
                <a href="#getcons" class="get_consult_yet">Записаться</a>
            </div>
            <div class="win_get_consult_after">Ваш запрос отправлен.<br>Я свяжусь с Вами по указанным контактам в течении дня.</div>
            <div class="win_get_consult_footer">
                * Стоимость одного часа индивидуальной работы 4000 руб.
                Данная форма является запросом на консультацию. Дата и время подтверждаются личным контактом по телефону.
            </div>
        </div>
        <div class="text">

            <div class="title">Миссия</div>
            <div class="text-content" id="miss">
                <?php
                echo $miss=str_replace("\n", "<br />",file_get_contents('texts/missiya.txt'));
                ?>
            </div>
            <div class="text-content" id="service">
                <?php
                echo $miss=file_get_contents('texts/service.txt');
                ?>
            </div>

            <?php
            //history box
            $dir='texts/history/';
            $listFile=scandir($dir);
            unset($listFile[0]);
            unset($listFile[1]);

            $strPoint='';
            $strHTML='<div class="text-content" id="talk">';
            foreach($listFile as $fname){
                $idName=trim($fname,".txt");
                $strPoint.='<div class="point" id="'.$idName.'"></div>';
                $miss=str_replace("\n", "<br />",file_get_contents($dir.$fname));
                $strHTML.='<div class="slide"  id="'.$idName.'">'.$miss.'</div>';
            }
            $strHTML.='</div><div class="slide-point" id="talk"><div class="button-next">></div><div class="view-time"><div class="load-time"></div></div>'.$strPoint.'</div>';
            echo $strHTML;
            ?>

            <div class="text-content" id="contacts">
                <form>

                    <div class="askme">
                        <input type="hidden" id="askForm" name="askForm" value="getAsk">
                        Обязательно укажите, как к Вам обращаться и куда ответить<br><br>
                        Ваше имя: <input id="askName" type="text" size="58" placeholder="Как я могу к Вам обращаться?"><br>
                        Телефон: <input id="askTel" type="text" size="58" placeholder="Если укажете телефон, то я Вам позвоню."><br>
                        E-mail: <input id="askEmail" type="email" size="58" placeholder="Если укажете e-mail, то я смогу ответить письмом."><br>
                    </div>

                    <textarea id="askText" cols="60" rows="12" placeholder="Здесь напишите Ваш вопрос."></textarea><br>
                    <input id="askButton" type="button" value="Спросить">
                </form>
            </div>
            <div class="text-content" id="about">
                <?php
                echo $miss=str_replace("\n", "<br />",file_get_contents('texts/about_me.txt'));
                ?>
            </div>
            <div class="menu-bottom">
                <ul>
                    <li class="miss open">Миссия</li>
                    <li class="service">Услуги</li>
                    <li class="about">Обо мне</li>
                    <li class="talk">Истории</li>
                    <li class="contacts">Спросить</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="imgback blur">

    </div>
<div class="copyright">
    &copy; Александра Долецкая. 2015-2019г.
    </div>
</div>

<script>
    console.log(screen);
</script>
</body>
</html>
