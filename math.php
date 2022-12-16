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
            background: url(background1.png); 
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
            <a href="math.php" class = "my_page">Математика</a>
            <a href="function.php">Функция</a>
            <a href="calculator.php">Калькулятор</a>
            <a href="lab10.php">Анализ</a>
        </nav>
    </header>


    <main>
    <div class="elements">
            <div class="answers">
            <script>

                //Задача 1 - возведение в степень
                alert("Возведение в степень");
                let power_x = prompt("Введите x", "");
                let power_n = prompt("Введите n", "");
                function power(power_x, power_n) {
                    if (power_n == 1) {
                        return power_x;
                    }
                    if (power_n != 1) {
                        return (power_x * power(power_x, power_n - 1));
                    }
                }        
                let answer_1 = power(power_x, power_n);
                alert(`${power_x} в степени ${power_n} = ${answer_1}`);


                //Задача 2 - наибольший общий делитель
                alert("Наибольший общий делитель");
                let gcd_a = prompt("Введите a", "");
                let gcd_b = prompt("Введите b", "");
                function gcd(gcd_a, gcd_b) {
                    if(gcd_b == 0) {
                    return gcd_a;
                    } else {
                        return gcd(gcd_b, gcd_a % gcd_b);
                    }            
                }    
                answer_2 = gcd(gcd_a, gcd_b)
                alert(`НОД чисел ${gcd_a} и ${gcd_b} = ${answer_2}`);


                //Задача 3 - наименьшая цифра
                alert("Наименьшая цифра числа x");
                let min_x = prompt("Введите x", "");
                function minDigit (x){
                    let min_d = 9;
                    while (x > 0){
                        if ((x % 10) < min_d){
                            min_d = x % 10;
                        }
                        x = Math.floor(x/10);
                    }
                    return min_d;
                }
                let answer_3 = minDigit(min_x);
                alert(`Наименьшая цифра числа ${min_x} = ${answer_3}`); 


                //Задача 4 - количество записей
                alert("Количество записей");
                let number = prompt("Введите n", "");

                function pluralizeRecords(n, was){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if ((n != 11) && (n1 == 1)) {
                        return was[1];
                    }
                    return was[0];
                }
                answerRecord = pluralizeRecords(number, ['было найдено', 'была найдена']);

                function pluralization (n, words){
                    n = Math.abs(n) % 100; 
                    var n1 = n % 10;
                    if (n > 10 && n < 20) { 
                        return words[2]; 
                    }
                    if (n1 > 1 && n1 < 5) { 
                        return words[1]; 
                    }
                    if (n1 == 1) { 
                        return words[0]; 
                    }
                    return words[2];
                }
                answer4 = pluralization(number, ['запись', 'записи', 'записей']);
                alert(`В результате выполнения запроса ${answerRecord} ${number} ${answer4}`);
                
                //Задача 5 - ряд Фибоначчи
                let error = "Ошибка";
                alert("n-ый элемент ряда Фибоначчи");
                let n_5 = prompt("Введите n", "");
                function fibb(n){
                    let last = 1, next = 1;
                        for(let i = 1; i < n; i++){
                        let current = next;
                        next = last + next;
                        last = current;
                        }
                    return last;
                }
                answer_5 = fibb(n_5);
                alert(`Число Фибоначчи ${n_5}: ${answer_5}`);

            </script>
            </div>
        </div>
    </main>
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>