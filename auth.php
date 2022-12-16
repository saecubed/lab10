<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Berdnikova_lab9</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style22.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background: url(background22.jpg); 
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
            <a href="auth.php" class = "my_page">Форма регистрации</a>
            <a href="math.php">Математика</a>
            <a href="function.php">Функция</a>
            <a href="calculator.php">Калькулятор</a>
            <a href="lab10.php">Анализ</a>
        </nav>
    </header>


    <main>
        <div class="container"><form method = "post" action = "https://httpbin.org/post">
            <p><b>Логин</b><br>
            <input type ="text" maxlength = "25" size="40" name="login"></p>
            <br>

            <p><b>Пароль</b><br>
            <input type = "password"  maxlength = "25" size="40" name="password"></p>
            
            <center><p>
            <input type="checkbox">Запомнить меня<br>
            </center></p>

            <p><input type = "submit" value = "Отправить"></p>


        </form></div>

     
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>