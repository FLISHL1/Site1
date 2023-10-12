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
<body>
<?php 
$link_main="../index.php";
$link_naturIsAm="naturIsAm.php";
$link_login="login.php";
$link_feedback="feedback.php";
$link_stableFuture="stableFuture.php";
include "header.php";
?>



    <main> 
            <h1 class='text h1'>Самые Удивительные Места на Земле</h1>
            <div class="block">
                <section>
                    <h2 class='text h2'>Путешествие вокруг света</h2>
                    <p class='text p'>Земля полна удивительных мест, которые просто ошеломляют своей красотой и уникальностью. Путешествие по нашей планете подарит вам невероятные впечатления и позволит открыть перед собой мир, полный чудес. Давайте вместе отправимся в увлекательное путешествие и узнаем о некоторых из самых потрясающих мест на планете.</p>
                </section>
                <?php 
                    $src='';
                    if(date('s')%2 === 0){
                        $src='coral.png';
                    } else {
                        $src='peru.png';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография">';
                    ?>
                
            </div>

            <?php 
            $arr = array("Великий Барьерный Риф, Австралия", "Мачу-Пикчу, Перу", "Парк Галапагоса, Эквадор", "Водопад Ангел, Венесуэла", "Национальный парк Банф, Канада");
            $text = array(
             "Это крупнейший коралловый риф в мире, который удивляет своим разнообразием подводной жизни и яркими красками кораллов. Под водой здесь скрывается настоящий рай для дайвинга и сноркелинга.",
             "Этот таинственный исторический памятник находится на высоте 2,430 метров в Андах и поражает своей геометрией и красотой. Это место притягивает путешественников со всего мира, желающих узнать его секреты.",
             "Галапагосские острова славятся уникальными видами животных, которые не встречаются больше нигде на Земле. Здесь вы сможете встретить гигантских черепах, игуан и многие другие удивительные существа.",
             "Этот водопад считается самым высоким в мире и впечатляет своей каскадной красотой. Путешествие к нему является настоящим приключением и незабываемым опытом для любителей природы.",
             "Здесь вас ждут величественные горные пейзажи, кристально чистые озера и богатая дикая природа. Парк Банф - это настоящая жемчужина в сердце Канадских Роки."
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
                        $src='tree.jpg';
                    } else {
                        $src='greenSocial.jpg';
                    } 
                    echo '<img src="/static/image/'.$src.'" class="image" alt="Меняющая фотография2">';
                    ?>
                <section>
                    <h2 class='text h2'>Защита и Сохранение</h2>
                    <p class='text p'>Сохранение природы и устойчивое развитие становятся все более важными в нашем современном мире. Мы живем во времена, когда необходимо думать о том, как использовать ресурсы планеты более ответственно и оставить ее в наследство будущим поколениям. На этой странице мы расскажем вам о мерах, предпринимаемых по всему миру для достижения устойчивости и сохранения нашей планеты.</p>
                </section>
            </div>

            


    </main>


    <?php 
    include 'footer.php';
    ?>

</body>
