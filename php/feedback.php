<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/feedback.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->

</head>

<body>
    <header>
        <img src="../static/image/cat_logo.png" width="80px" height="80px" style="margin: auto 0 auto 25px;">
        <nav class='navbar'>
            <a href="../index.php" class="navbtn" id="mainbtn">Моя страница</a>
            <a href="../index.php" class="navbtn">Главная</a>
            <a href="#bottom" class="navbtn">Контакты</a>
            <a href="" class="navbtn">Достижения</a>
        </nav>
        <a class="navbtn loginbtn" href="login.html">Login</a>
    </header>


    <main>
        
        <form action="https://httpbin.org/post" method="POST">
            <label class="label_box title">Обратная связь</label>
            <input type="text" name="name"  class="input" placeholder="ФИО">
            <input type="email" name="email"  class="input" placeholder="Email">
            <label class="label_box">
                <input type="radio" name="distribut" id="friend" class="radiobutton">От друга
            </label>

            <label class="label_box">
                <input type="radio" name="distribut" id="internet" class="radiobutton">Из инернета
            </label>

           <label class="label_box">Тип обращения: 
            <select name="type_feedback" class="input select">
                <option value="complain">Жалоба</option>
                <option value="complain">Предложение</option>
            </select>
            </label>
            <textarea class="input" name="feedback_text" rows="5" cols="33"></textarea>
            <input class="input" type="file">
            <label class="label_box">
                <input type="checkbox" name="remeber" class="checkbox">Даю согласие на обработку <br>персональных данных
            </label>
            <input type="submit" class="btn" value="Оправить">
            
        </form>
    </main>


    <footer>
        <div class="contact" id="bottom">  
        <p class="contact_text"><b>Email:</b> kirill15022005@gmail.com</p>
        <p class="contact_text"><b>Телефон:</b> +7 (960) 470-79-81</p>
        </div>
        <a href="html/feedback.html" class="contact_text navbtn">Обратная связь</a>
    </footer>

</body>
