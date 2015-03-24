<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Psyhobbit</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/main.css" rel="stylesheet">
    <link href="css/slider-div.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider-div.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.js"></script>

</head>

<body>
<div class="person">
    <div class="foto"></div>
    <div class="name">Александра Долецкая</div>
    <div class="subtitle">психолог, бизнес-тренер</div>
    <div class="phone">+7(926)389-01-54</div>
    <div class="mail">doletskaya@bk.ru</div>
    <div class="action">
        <a class="get_consult" href="#">Записаться на консультацию</a>
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
            <tr>
                <td>
                    Дата:
                </td>
                <td>
                    <input id="GCdata" type="date">
                </td>
            </tr>
            <tr>
                <td>
                    Время:
                </td>
                <td>
                    <input id="GCtime" type="time">
                </td>
            </tr>
        </table><br>
        <u>Тема консультации:</u><br>
        <textarea id="GCtext" rows="10" cols="57" placeholder="Кратко опишите Вашу тему для консультирования"></textarea><br>
        <a href="#" class="get_consult_yet">Записаться</a>
    </div>
    <div class="win_get_consult_after">Ваш запрос отправлен.<br>Я свяжусь с Вами по указанным контактам в течении дня.</div>
    <div class="win_get_consult_footer">
        * Стоимость одного часа личной консультации 1500 руб. Для первой встречи предоставляется скидка 50%.<br>
        Данная форма является запросом на консультацию. Дата и время подтверждаются личным контактом по телефону.
    </div>
</div>
<div class="text">

    <div class="title">Миссия</div>
    <div class="text-content" id="miss">
        <?
        echo $miss=str_replace("\n", "<br />",file_get_contents('texts/missiya.txt'));
        ?>
    </div>
    <div class="text-content" id="service">
        <?
        echo $miss=str_replace("\n", "<br />",file_get_contents('texts/service.txt'));
        ?>
    </div>

        <?//history box
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
        <textarea id="askText" cols="70" rows="10" placeholder="Здесь напишите Ваш вопрос."></textarea>
        <div class="askme">
            <input type="hidden" id="askForm" name="askForm" value="getAsk">
            Обязательно укажите, как к Вам обращаться и куда ответить<br><br>
            Ваше имя: <input id="askName" type="text" size="60" placeholder="Как я могук Вам обращаться?"><br>
            Телефон: <input id="askTel" type="text" size="60" placeholder="Если укажете телефон, то я Вам позвоню."><br>
            E-mail: <input id="askEmail" type="email" size="60" placeholder="Если укажете e-mail, то я смогу ответить письмом."><br>
            <input id="askButton" type="button" value="Спросить">
        </div>

    </form>
    </div>
    <div class="text-content" id="about">
        <?
        echo $miss=str_replace("\n", "<br />",file_get_contents('texts/about_me.txt'));
        ?>
    </div>
    <div class="menu-bottom">
        <ul>
            <li class="miss">Миссия</li>
            <li class="service">Услуги</li>
            <li class="talk">Истории</li>
            <li class="contacts">Спросить</li>
            <li class="about">Обо мне</li>
        </ul>
    </div>
</div>
    <div class="imgback blur">

    </div>
</body>
</html>
