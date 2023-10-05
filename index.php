<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361 л4</title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
</head>
<?php 
  $link_main="index.php";
  $link_naturIsAm="php/naturIsAm.php";
  $link_login="php/login.php";
  $link_feedback="php/feedback.php";
  $link_stableFuture="php/stableFuture.php";
    include "php/header.php";
?>


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

            <?php 
            $arr = array("Биоразнообразие", "Удивительные Экосистемы", "Урожаи и Пища", "Природные Явления", "Путешествия и Приключения");
            $text = array(
             "На нашей планете обитает более 8.7 миллионов видов живых существ, и это только те, которых мы знаем. Великолепное разнообразие жизни, которое нужно защищать.",
             "От тропических джунглей до холодных арктических районов, каждая экосистема уникальна и играет важную роль в балансе природы.",
             "Большинство продуктов, которые мы употребляем, исходят из природы. Она обеспечивает нам фрукты, овощи, зерно, и многое другое.",
             "Горные вершины, красивые водопады, сияющие звезды на ночном небе - природа приносит нам бесконечные удивительные моменты.",
             "Природа предоставляет множество возможностей для путешествий и приключений. От походов по горным хребтам до подводного мира океанов - мир природы ожидает вашего открытия."
            );

            echo '<ul class="text block">';
            for($i = 0; $i<count($arr); $i++){
                echo "<li><b>$arr[$i]</b><p>$text[$i]</p></li>";
            }
            echo '</ul>'
            ?>
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
