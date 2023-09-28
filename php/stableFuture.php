<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?php $name= 'Конопский Кирилл Сергеевич 221-361 Л3'; echo $name ?></title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
    <?php 
    
    $link_main="../index.php";
    $link_naturIsAm="naturIsAm.php";
    $link_login="login.php";
    $link_feedback="feedback.php";
    
    
    ?>
</head>

<body>
    <header>
        <img src="<?= '../static/image/cat_logo.png' ?>" width="80px" height="80px" style="margin: auto 0 auto 25px;">
        <nav class='navbar'>
            
            <a href="<?php 
            $visible=true;
            $text='Моя страница';
            echo $link_main; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>" id="mainbtn"><?= $text?></a>
            
            <a href="<?php 
            $visible=true;
            $text='Природа удивительна';
            echo $link_naturIsAm; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>"> <?= $text?> </a>
            
            <a href="#bottom" class="navbtn">Контакты</a>
            
            <a href="<?php 
            $visible=true;
            $text='Стабильное будущее';
            echo ''; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>"> <?= $text?> </a>
        </nav>
        <a href="<?php 
            $visible=true;
            $text='Авторизация';
            echo $link_login; 
            ?>" class="<?php if($visible){echo 'navbtn loginbtn';} ?>"> <?= $text?> </a>
    </header>


    <main> 
            <h1 class='text h1'>Сохранение Природы и Устойчивое Развитие</h1>
            <div class="block">
                <section>
                    <h2 class='text h2'>На Пути к Устойчивому Миру</h2>
                    <p class='text p'>Сохранение природы и устойчивое развитие становятся все более важными в нашем современном мире. Мы живем во времена, когда необходимо думать о том, как использовать ресурсы планеты более ответственно и оставить ее в наследство будущим поколениям. На этой странице мы расскажем вам о мерах, предпринимаемых по всему миру для достижения устойчивости и сохранения нашей планеты.</p>
                </section>
                <?php 
                    $src='';
                    if(date('s')%2 === 0){
                        $src='vetryk.jpg';
                    } else {
                        $src='greenSity.jpg';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография">';
                    ?>
                
            </div>

            <?php 
            $arr = array("Энергия из возобновляемых источников", "Устойчивое сельское хозяйство", "Минимизация отходов", "Эффективное использование воды", "Защита природных мест");
            $text = array(
             "Солнечная и ветровая энергия становятся все более доступными и приемлемыми вариантами для получения энергии. Они снижают выбросы углекислого газа и способствуют борьбе с изменением климата.",
             "Органическое сельское хозяйство и методы сохранения почвы и водных ресурсов помогают сократить негативное воздействие сельского хозяйства на окружающую среду.",
             "Переработка и уменьшение использования одноразовых товаров способствуют снижению объемов отходов, которые негативно воздействуют на природу.",
             "Рациональное использование водных ресурсов и участие в программах по их сохранению помогают поддерживать экологическое равновесие.",
             "Активное участие в организациях и мероприятиях, посвященных охране природы и экосистем."
            );

            echo '<ul class="text block">';
            for($i = 0; $i<count($arr); $i++){
                echo "<li><b>$arr[$i]</b><p>$text[$i]</p></li>";
            }
            echo '</ul>'
            ?>

            <div class="block">
                <?php 
                    $src='';
                    if(date('s')%2 === 0){
                        $src='powerPlanet.jpg';
                    } else {
                        $src='greenSocial.jpg';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография2">';
                    ?>
                <section>
                    <h2 class='text h2'>Ваше Влияние: Действуйте Сегодня</h2>
                    <p class='text p'>Сохранение природы и устойчивое развитие - это задача не только государств и мировых организаций, но и каждого из нас. На этой странице мы рассмотрим, какие шаги можно предпринять в повседневной жизни, чтобы сделать наш мир более устойчивым и заботиться о будущих поколениях.</p>
                </section>
            </div>

            


    </main>


    <footer>
        <div class="contact" id="bottom">  
        <p class="contact_text"><b>Email:</b> kirill15022005@gmail.com</p>
        <p class="contact_text"><b>Телефон:</b> +7 (960) 470-79-81</p>
        <p class="contact_text"><b>Собрано:</b> <?php echo date("Y-m-d H:i:s") ?> </p>
        </div>

        <a href="<?php 
            $visible=true;
            $text='Обратная  связь';
            echo $link_feedback; 
            ?>" class="<?php if($visible){echo 'contact_text navbtn';} ?>"> <?= $text?> </a>

    </footer>

</body>