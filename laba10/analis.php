<?php


function test_it($text)
{
// количество символов в тексте определяется функцией размера текста
    echo 'Количество символов: ' . strlen($text) . '<br>';
// определяем ассоциированный массив с цифрами
    $cifra = array('0' => true, '1' => true, '2' => true, '3' => true, '4' => true,
        '5' => true, '6' => true, '7' => true, '8' => true, '9' => true);
// вводим переменные для хранения информации о:
    $cifra_amount = 0; // количество цифр в тексте
    $word_amount = 0; // количество слов в тексте
    $word = ''; // текущее слово
    $words = array(); // список всех слов
    for ($i = 0; $i < strlen($text); $i++) // перебираем все символы текста
    {
        if (array_key_exists($text[$i], $cifra)) // если встретилась цифра
            $cifra_amount++; // увеличиваем счетчик цифр
// если в тексте встретился пробел или текст закончился
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
    }
// выводим количество цифр в тексте
    echo 'Количество цифр: ' . $cifra_amount . '<br>';
// выводим количество слов в тексте
    echo 'Количество слов: ' . count($words) . '<br>';

    echo 'Количество строчных букв: ' . getLetterOccurrences($text, 'lowercase') . '<br>';

    echo 'Количество заглавных букв: ' . getLetterOccurrences($text, 'uppercase') . '<br>';
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
//    echo 'Количество вхождений каждого символа текста: '. implode('; ', test_symbs($text)) . '<br>';
}


function test_symbs($text)
{
    $symbs = array(); // массив символов текста
    $l_text = strtolower($text); // переводим текст в нижний
// последовательно перебираем все символы текста
    for ($i = 0; $i < strlen($l_text); $i++) {
        if (isset($symbs[$l_text[$i]])) // если символ есть в массиве
            $symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
        else // иначе
            $symbs[$l_text[$i]] = 1; // добавляем символ в массив
    }
    return $symbs; // возвращаем массив с числом вхождений символов в тексте
}


function getLetterOccurrences($text, $letterCase)
{
    $pattern = ($letterCase === 'lowercase') ? '/[a-zа-я]/u' : '/[A-ZА-Я]/u';
    preg_match_all($pattern, $text, $matches);

    $occurrences = count($matches[0]);

    return $occurrences;
}













