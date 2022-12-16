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
    <style >
        body { 
            background: url(background21.jpg); 
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
        <div class="container">
        <?php
            echo '<p> Здравствуйте, '.$_POST['name'].'</p>'; 
            if ($_POST['category'] == '1'){ //проверяем тип обращения
                echo '<p>Спасибо за ваше предложение:</p>';
                echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
            }else{
                echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                echo '<textarea>'.$_POST['message'].'</textarea>';
            } 
       
            if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo '<p>Вы приложили следующий файл: </p>'.$_POST['attachment'];
            echo '<a class="btn" href="feedback.php?name='.$_POST['name'].'&email='.$_POST['email'].'&source='.$_POST['source'].'"><br>Заполнить снова</a>';
            ?>
        </div>

     
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>