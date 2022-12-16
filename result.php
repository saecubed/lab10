<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Berdnikova_lab9</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background: url(background.jpg); 
            background-position: top;
        }
        
      </style>
</head>
<body>

    <header>
        <nav class = "top_text">
            <a href="index.php"> Моя страница </a>
            <a href="#">Главная</a>
            <a href="feedback.php">Форма фидбека</a>            
            <a href="auth.php">Форма регистрации</a>
            <a href="math.php">Математика</a>
            <a href="function.php">Функция</a>
            <a href="calculator.php">Калькулятор</a>
            <a href="lab10.php">Анализ</a>
        </nav>
    </header>


    <main>
    
    <main>
        <div class="l10">
    <?php
    if (isset($_POST['data']) && $_POST['data']) {
        echo '<div class = "start"><b style="vertical-align: top;">Исходный текст: </b><pre class="ish-text">'.$_POST['data'].'</pre></div>';
        
        echo '
        <div class="tbl">
            <table>
        ';

        $spec = [
            'syms', 'letters', 'upper_lower', 'coms', 'nums'
        ];

        $spec_out = array(
            'syms' => 'Количество символов',
            'letters' => 'Количество букв',
            'nums' => 'Количество цифр',
            'words' => 'Количество слов',
            'coms' => 'Количество знаков препинания',
            'upper_lower' => 'Количество заглавных и строчных букв',
        );
    
        $tst = text_analize($_POST['data']);
    
        for ($i=0; $i<sizeof($spec); $i++) {
            echo '
            <tr>
                <td>'.$spec_out[$spec[$i]].'</td>
                <td>'.$tst[$spec[$i]].'</td>
            </tr>';
        }

        echo '<tr><td>Количество вхождений каждого символа текста</td><td><table class="inner-table">';
        foreach ($tst['syms_nums'] as $sym => $count) {
            echo '
            <tr>
                <td>'.$sym.'</td>
                <td>'.$count.'</td>
            </tr>';
        }
        echo '</table></td>';

        echo '<tr><td>Список всех слов в тексте и количество их вхождений, отсортированный по алфавиту</td>'
            .'<td><table class="inner-table">';
        foreach ($tst['words_freq'] as $word => $freq) {
            echo '
            <tr>
                <td>'.$word.'</td>
                <td>'.$freq.'</td>
            </tr>';
        }
        
        echo '</table></td></tr>';

        echo '
            </table>
        </div>
        ';

       

    }
    else {
        echo '<div class="src_error">Нет текста для анализа</div>';
    }

    ?>

    
    </main>

    </main>


  </body>
</body>
</html>

<?php

function text_analize($text) {
    $res = array();
    $res['syms'] = mb_strlen($text);
    $res['letters'] = mb_strlen(preg_replace("/[^a-zA-Zа-яА-Я]/u", "", $text));
    $res['upper_lower'] = mb_strlen(preg_replace("/[^a-zа-я]/u", "", $text)).
        ' строчных; '.
        mb_strlen(preg_replace("/[^A-ZА-Я]/u", "", $text)).
        ' заглавных';
    $res['coms'] =  mb_strlen(preg_replace("/[^.,:;!?-]/u", "", $text));
    $res['nums'] = mb_strlen(preg_replace("/[^0-9]/u", "", $text));
    $res['words'] = 0;
    if ($text != ''){
        $res['words'] =  count(explode(" ", $text));
    }

    $res['syms_nums'] = array();
    for ($i=0; $i<mb_strlen($text); $i++) {
        $sym = mb_strtolower(mb_substr($text, $i, 1));
        if ($sym == ' ') $sym = 'SPACE';

        if (isset($res['syms_nums'][$sym])) {
            $res['syms_nums'][$sym] += 1;
        }
        else $res['syms_nums'][$sym] = 1;
    }

    $words = explode(" ", preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", $text));
    $words = array_filter($words);
    $unique_words = array_unique($words); // уникальные слова
    $unique_words_freq = array(); // частота встречаемости слов
    foreach ($unique_words as $uw) $unique_words_freq[$uw] = 0; // устанавливаем начальные значения
    foreach ($words as $w) $unique_words_freq[$w] += 1; // считаем частоту встречаемости слов
    ksort($unique_words_freq); // сортируем по алфавиту

    $res['words_freq'] = $unique_words_freq;
    
    return $res;
}

?>