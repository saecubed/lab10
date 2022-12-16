<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Berdnikova_lab9</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background-color: #aca7a8;;
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
            <a href="calculator.php">Калькулятор</a>
            <a href="lab10.php">Анализ</a>
            <img src="polytech.png" class="polytech" id="logo-poly" height="40" margin-right="35px">
        </nav>
    </header>


    <main>
        
    <div class="header-down">
        <section>
        <div class="content">
            <img src="function.png">
            <?php
            $precison = 3; //округление
            $x = 18; // начальное значение аргумента
            $encounting = 10; // количество вычисляемых значений
            $step = 2;  // шаг изменения аргумента
            $type = 'B'; // тип верстки
            $sum = 0;
            $count = 0;
            $f_mean = 0;
            $max_value_func = -4;
            $min_value_func = 1000;
            
            if ($type == 'A') {
                echo '';
            }
            if ($type == 'B') {
                echo '<ul>';
            }
            if ($type == 'C') {
                echo '<ol>';
            }
            
            else if ($type == 'D') {
                echo '<table border="1px">'."\n<br>";
                echo '<tr>'."\n<br>";
            }

            if ($type == 'E') {
                echo '<div class="block_func">';
            }
            
            echo 'Тип верстки: '.$type;
            
            // цикл с заданным количеством итераций
            for( $i=0; $i < $encounting; $i++, $x+=$step ) {
                if ($x <= 10){
                    $f = 0.33*$x**2 + 4;
                    $sum=$sum+$f;  
                    $count++; 
                }
                else
                if ($x < 20){
                    $f = 18*$x - 3;
                    $sum=$sum+$f;                      
                    $count++; 
                }
                else{
                    if ($x == 20){
                        $f = 'error';
                    }
                    if ($x != 20){
                        $f = 1 / ($x*0.1 - 2);
                        $sum=$sum+$f;                           
                        $count++; 
                    }
                }


                if ($f > $max_value_func && $f != "error") {
                    $max_value_func = $f;
                }

                if ($f < $min_value_func && $f != "error") {
                    $min_value_func = $f;
                }
            
            
                switch ($type) {
                    
                    case 'A':
                        if ($f != "error") {
                            $f = (float)$f;
                            echo 'f('.$x.')='.round($f, $precison);	                 
                        }
                        else {
                            echo 'f('.$x.')='.$f;
                        }            
                        if($i < $encounting-1) {                               
                            echo '<br>';                                         
                        }
                        break;
                    case 'B':
                        if ($f != "error") {
                            $f = (float)$f;
                            echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                 
                        }
                        else {
                            echo '<li>f('.$x.')='.$f.'</li>';
                        }
                        break;
                    case 'C':
                        if ($f != "error") {
                            $f = (float)$f;
                            echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                   
                        }
                        else {
                            echo '<li>f('.$x.')='.$f.'</li>';
                        }
                        break;
            
                    case 'D':
                        if ($f != "error") {
                            $f = (float)$f;
                            echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.round($f, $precison).'</td>'.'</tr>';                 
                        }
                        else {
                            echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.$f.'</td>'.'</tr>';
                        }      
                       break;
                        
                    case 'E':           
                        if ($f == 'error') {
                            echo '<div class="block_func-item">f('. $x.')='.$f.'</div>';
                        }
                        else {
                            echo '<div class="block_func-item">f('. $x.')='.round($f).'</div>';
                        }
                        break;  
                
                }                
            }
            
            
            if ($type == 'B') {
                echo '</ul>';
            }
            if ($type == 'C') {
                echo '</ol>';
            }
            if ($type == 'D') {
                echo '</tbody></table>';
            }
            if ($type == 'E') {
                echo  '</div>';;
            }

            echo '<div class="func_const">Максимальное значение: '. $max_value_func .'<br>';
            echo 'Минимальное значение: '. $min_value_func .'<br>';

            echo 'Сумма всех значений f: '.round($sum, $precison) .'<br>';
            echo 'Среднее значение: '.round($sum / $count, $precison) . '</div>';

            ?>     
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


</body>
</html>