<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?php $name= 'Конопский Кирилл Сергеевич 221-361 Л3'; echo $name ?></title>
    <link rel="stylesheet" type="text/css" href="static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="static/css/header.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
    <?php 
    
    $link_main="index.php";
    $link_login="php/login.php";
    $link_feedback="php/feedback.php";
    
    
    ?>
</head>

<body>
    <header>
        <img src="<?= 'static/image/cat_logo.png' ?>" width="80px" height="80px" style="margin: auto 0 auto 25px;">
        <nav class='navbar'>
            <a href="<?= $link_main ?>" class="navbtn" id="mainbtn">Моя страница</a>
            <a href="index.php" class="navbtn">Главная</a>
            <a href="#bottom" class="navbtn">Контакты</a>
            <a href="" class="navbtn">Достижения</a>
        </nav>
        <a class="navbtn loginbtn" href="html/login.html">Login</a>
    </header>


    <main> 
            <h1 class='text h1'>Природное вдохновение</h1>
            <div class="block">
                <section>
                    <h2 class='text h2'>Исследование природы в ее самом великолепном проявлении</h2>
                    <p class='text p'>На этом сайте мы приглашаем вас на увлекательное путешествие в мир природы. Мы предоставляем уникальные и увлекательные статьи, фотографии и видео о природных явлениях, животном мире и красотах нашей планеты. Погрузитесь в захватывающие истории о приключениях в дикой природе, изучайте биологическое разнообразие и научитесь уважать и охранять окружающую среду.</p>
                </section>
                <?php 
                    $src='';
                    if(date('s')%2 === 0){
                        $src='i.png';
                    } else {
                        $src='i1.png';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография">';
                    ?>
                
            </div>
            <div class="block">
                <?php 
                    $src='';
                    if(date('s')%2 === 0){
                        $src='tree4.jpg';
                    } else {
                        $src='greenSocial.jpg';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография2">';
                    ?>
                <section>
                    <h2 class='text h2'>Собираем сообщество природолюбов</h2>
                    <p class='text p'>Мы не только предоставляем увлекательный контент о природе, но и строим сообщество природолюбов. Присоединяйтесь к нашим форумам, обменивайтесь опытом и фотографиями, задавайте вопросы и находите новых друзей, разделяющих вашу страсть к природе. Вместе мы создаем место, где можно поделиться своими приключениями и вдохновить других полюбить природу так же, как и мы.</p>
                </section>
            </div>
            <ul class='text'>
                <li>Биоразнообразие</li>
                <li>Удивительные Экосистемы</li>
                <li>Урожаи и Пища</li>
                <li>Природные Явления</li>
                <li>Путешествия и Приключения</li>
            </ul>
        <!-- <table>
            <thead>
                <tr>
                    <th scope="col" class="head">Природные явления</th>
                    <th scope="col" class="head">Описание</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row">Лес</td>
                    <td class="row">Насладитесь красотой леса и его живописными пейзажами. <br>Возможно, вы даже встретите лесных обитателей, таких как олени и белки.</td>
                </tr>
                <tr>
                    <td class="row">Горы</td>
                    <td class="row">Изучайте величественные горные вершины и прекрасные горные озера. <br>Возможно, вам захочется попробовать себя в альпинизме.</td>
                </tr>
                <tr>
                    <td class="row">Океан</td>
                    <td class="row">Погрузитесь в мир океанских глубин и изучайте подводную жизнь. <br> Возможно, вы найдете сокровища на дне моря.</td>
                </tr>
                <tr>
                    <td class="row">Кот:)</td>
                    <td class="row">Наш дружелюбный кот, Meow, всегда готов весело провести время в вашей компании. <br> Он обожает природу так же, как и вы!.</td>
                </tr>
            </tbody>
        </table> -->
    </main>


    <footer>
        <div class="contact" id="bottom">  
        <p class="contact_text"><b>Email:</b> kirill15022005@gmail.com</p>
        <p class="contact_text"><b>Телефон:</b> +7 (960) 470-79-81</p>
        <p class="contact_text"><b>Собрано:</b> <?php echo date("Y-m-d H:i:s") ?> </p>
        </div>
        <a href="html/feedback.html" class="contact_text navbtn">Обратная связь</a>
    </footer>

</body>
