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
        $strHTML.='</div><div class="slide-point" id="talk">'.$strPoint.'</div>';
        echo $strHTML;
        ?>

    <div class="text-content" id="contacts">

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