


<header>
        <img src="../static/image/cat_logo.png" width="80px" height="80px" style="margin: auto 0 auto 25px;">
        <nav class='navbar'>
            
            <a href="<?php 
            $visible=true;
            $text='Главная страница';
            echo $link_main; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>" id="mainbtn"><?= $text?></a>
            
            <a href="<?php 
            $visible=true;
            $text='Продукты';
            echo $link_products; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>"> <?= $text?> </a>
            
            <a href="#bottom" class="navbtn">Контакты</a>
            
            <a href="<?php 
            $visible=true;
            $text='Доставка и оплата';
            echo $link_stableFuture; 
            ?>" class="<?php if($visible){echo 'navbtn';} ?>"> <?= $text?> </a>
        </nav>
        <a href="<?php 
            $text='Авторизация';
            echo $link_login; 
            ?>" class="<?php if($visibleAuth){echo 'navbtn loginbtn';}  else {echo 'notVisible';}?>"> <?= $text?> </a>

            <a href="<?php 
            $text='Корзина';
            echo $link_corz; 
            ?>" class="<?php if($visibleCorz){echo 'navbtn loginbtn';} else {echo 'notVisible';}?>"> <?= $text?> </a>
    </header>
