


    <header>
        <img src="../static/image/cat_logo.png" width="80px" height="80px" style="margin: auto 0 auto 25px;">
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
            echo $link_stableFuture; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>"> <?= $text?> </a>
        </nav>
        <a href="<?php 
            $visible=true;
            $text='Авторизация';
            echo $link_login; 
            ?>" class="<?php if($visible){echo 'navbtn loginbtn';} ?>"> <?= $text?> </a>
    </header>
