<footer>
        <div class="contact" id="bottom">  
        <p class="contact_text"><b>Email:</b> kirill15022005@gmail.com</p>
        <p class="contact_text"><b>Телефон:</b> +7 (960) 470-79-81</p>
        <p class="contact_text"><b>INFO:</b> <?= $authText ?> </p>
        <input class=<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {echo 'btn';} else {echo 'notVisible';}?> type="button" onClick='deleteAllCookies()' value="Выйти">
        </div>
        <a href="<?php 
            $text='Обратная  связь';
            echo ''; 
            ?>" class="<?php if($visibleFeedBack){echo 'contact_text navbtn';} else {echo 'notVisible';}?>"> <?= $text?> </a>
    </footer>
    <script>
        function deleteAllCookies() {
                var cookies = document.cookie.split(";");
	for (var i = 0; i < cookies.length; i++) {
		var cookie = cookies[i];
		var eqPos = cookie.indexOf("=");
		var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
		document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;";
		document.cookie = name + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	}
        location.reload ()
}
        </script>