<?php


function test_it($text)
{
// количество символов в тексте определяется функцией размера текста
    echo '<p>Количество символов: ' . strlen($text) . '<br></p>';
// определяем ассоциированный массив с цифрами
    $cifra = array('0' => true, '1' => true, '2' => true, '3' => true, '4' => true,
        '5' => true, '6' => true, '7' => true, '8' => true, '9' => true);
    $punctuation_marks = array(
        '.'=>true, ','=>true, '!'=>true, '?'=>true, '...'=>true, ':'=>true, ';'=>true, '-'=>true, '('=>true, ')'=>true, '"'=>true
    );
// вводим переменные для хранения информации о:
    $cifra_amount = 0; // количество цифр в тексте
    $word_amount = 0; // количество слов в тексте
    $word = ''; // текущее слово
    $words = array(); // список всех слов
    $word=''; // текущее слово
    $words=array(); // список всех слов
    $punctuation_marks_amount = 0;
    for ($i = 0; $i < strlen($text); $i++) // перебираем все символы текста
    {
        if (array_key_exists($text[$i], $cifra)) // если встретилась цифра
            $cifra_amount++; // увеличиваем счетчик цифр
// если в тексте встретился пробел или текст закончился
        if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $punctuation_marks) )
        $punctuation_marks_amount++;
        if ($text[$i] == ' ' || $i == strlen($text) - 1) {
            if ($word) // если есть текущее слово
            {
// если текущее слово сохранено в списке слов
                if (isset($words[$word]))
                    $words[$word]++; // увеличиваем число его повторов
                else
                    $words[$word] = 1; // первый повтор слова
            }
            $word = ''; // сбрасываем текущее слово
        } else // если слово продолжается
            $word .= $text[$i]; //добавляем в текущее слово новый символ
                   if ($word != '' && $text[$i] == '-'){
            $word .= $text[$i];
            continue;
        }
        if ($text[$i] == ' ' || array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $punctuation_marks)){
            if ($word == '') continue;
            if (isset($words[$word])){
                $words[$word] += 1;
            } else{
                $words[$word] = 1;
            }

            $word = '';
        } else {
                $word .= $text[$i];
        }

        if ($word != '' && $text[$i] == '-'){
            $word .= $text[$i];
            continue;
        }
        if ($text[$i] == ' ' || array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $punctuation_marks)){
            if ($word == '') continue;
            if (isset($words[$word])){
                $words[$word] += 1;
            } else{
                $words[$word] = 1;
            }

            $word = '';
        } else {
                $word .= $text[$i];
        }
    }
// выводим количество цифр в тексте
    echo '<p>Количество цифр: ' . $cifra_amount . '<br></p>';
// выводим количество слов в тексте
    echo '<p>Количество слов: ' . count($words) . '<br></p>';
    echo '<p>Количество букв: ' . countUpperLetters($text)+countLowerLetters($text). '<br></p>';
    echo '<p>Количество строчных букв: ' . countUpperLetters($text). '<br></p>';

    echo '<p>Количество заглавных букв: ' . countLowerLetters($text) . '<br></p>';
    echo '<p>Количество знаков препинания: '.$punctuation_marks_amount.'<br></p>';

    $result1 = test_symbs($text);
    echo '<table>
<thead> 
<tr>
<th>Буква</th>
<th>Кол-во</th>
</tr>
</thead>
<tbody>
';
    while ($element = current($result1)) {
        echo '
        <tr>
            <td>' . iconv("cp1251", "utf-8", key($result1)) . ' </td>
            <td>' . $element . ' </td>
        </tr>
        
        ';
        next($result1);
    }
    echo '</tbody></table>';
    ksort($words);
    echo '<table style="margin-top: 25px;"><thead><tr><th>Слово</th><th>Кол-во</th></tr></thead><tbody>';
    foreach ($words as $key => $value) {
        echo '<tr><td>'.iconv("cp1251", "utf-8",$key).'</td><td> '.$value."</td></tr>";
    }
    echo '</tbody></table>';    
//    echo 'Количество вхождений каждого символа текста: '. implode('; ', test_symbs($text)) . '<br>';


}


function test_symbs($text)
{
    $symbs = array(); // массив символов текста
    $l_text = mb_strtolower($text, "cp1251"); // переводим текст в нижний
// последовательно перебираем все символы текста
    for ($i = 0; $i < strlen($l_text); $i++) {
        if (isset($symbs[$l_text[$i]])) // если символ есть в массиве
            $symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
        else // иначе
            $symbs[$l_text[$i]] = 1; // добавляем символ в массив
    }
    return $symbs; // возвращаем массив с числом вхождений символов в тексте
}


function countUpperLetters($string) {
    return mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', iconv("cp1251", "utf-8", $string)), 'UTF-8');
}

function countLowerLetters($string) {
    return mb_strlen( preg_replace('/[^a-zа-яё]/u', '', iconv("cp1251", "utf-8", $string)), 'UTF-8');

}











