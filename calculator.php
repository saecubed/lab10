<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Berdnikova_lab9</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style21.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <script src="7lab.js" defer></script>
    <style>
        body { 
            background: url(background.jpg); 
            background-position: top;
        }
        
      </style>
</head>
<body>


    <header>
        <nav class = "top_text">
            <a href="index.php" class = "my_page"> Моя страница </a>
            <a href="#">Главная</a>
            <a href="feedback.php">Форма фидбека</a>            
            <a href="auth.php">Форма регистрации</a>
            <a href="function.php">Функция</a>
            <a href="calculator.php">Калькулятор</a>
            <a href="lab10.php">Анализ</a>
        </nav>
    </header>


    <main>
       <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
                <textarea id="out_screen" rows="3" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
                <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                    <button class="key_digit" id="d_1" value="1">1</button>
                    <button class="key_digit" id="d_2" value="2">2</button>
                    <button class="key_digit" id="d_3" value="3">3</button>
                    <button class="key_digit" id="d_4" value="4">4</button>
                    <button class="key_digit" id="d_5" value="5">5</button>
                    <button class="key_digit" id="d_6" value="6">6</button>
                    <button class="key_digit" id="d_7" value="7">7</button>
                    <button class="key_digit" id="d_8" value="8">8</button>
                    <button class="key_digit" id="d_9" value="9">9</button>
                    <button class="key_digit" id="d_c" value=".">.</button>
                    <button class="key_digit" id="d_0" value="0">0</button>
                    <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                </div>
                <div class="other" id="other" >
                    <button class="key_operation" id="o_a" value="+">+</button>
                    <button class="key_clear_1" id="b_c_all" value="C">C</button>
                    <button class="key_bracket" id="b_l" value="(">(</button>
                    <button class="key_bracket" id="b_r" value=")">)</button>
                    <button class="key_operation" id="o_d" value="/">/</button>
                    <button class="key_operation" id="o_m" value="*">*</button>
                    <button class="key_operation" id="o_s" value="-">-</button>
                    <button class="key_result" id="bt_r" value="=">=</button>
                    <button class="key_clear_2" id="b_c_one" value="CE">CE</button>
                </div>
            </div>
        </div>
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>