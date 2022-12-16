// Функция priority позволяет получить 
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.

function priority(operation) {
    if (operation == '+' || operation == '-') {
        return 1;
    } else {
        return 2;
    }
}

// Проверка, является ли строка str числом.
function isNumeric(str) {
    return /^\d+(.\d+){0,1}$/.test(str);
}

// Проверка, является ли строка str цифрой.
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

// Проверка, является ли строка str оператором.
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены 
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.

function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.') {
            lastNumber += char;
        } else {
            if(lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        } 
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        } 
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    return tokens;
}

// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной 
// нотации, и преобразует это выражение в обратную 
// польскую нотацию (ОПН). Возвращаемое значение -- 
// результат преобразования в виде строки, в которой 
// операторы и операнды отделены друг от друга пробелами. 
// Выражение может включать действительные числа, операторы 
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
//обратная польская нотация, постфиксная нотация


function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)) {
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length-1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }

    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}




// Функция evaluate принимает один аргумент -- строку 
// с арифметическим выражением, записанным в обратной 
// польской нотации. Возвращаемое значение -- результат 
// вычисления выражения. Выражение может включать 
// действительные числа и операторы +, -, *, /.
// Вам нужно реализовать эту функцию
// (https://ru.wikipedia.org/wiki/Обратная_польская_запись#Вычисления_на_стеке).
function evaluate(str) {
    let stack = compile(str).split(" ");
    for(let i = 0; i < stack.length; i++) {
        if("+-/*".indexOf(stack[i]) !== -1) {
            let oper = stack[i];
            stack.splice(i, 1);
            let y = Number(stack[i - 1]);
            stack.splice(i - 1, 1);
            let x = Number(stack[i - 2]);
            stack.splice(i - 2, 1);         
            if(oper === '+') {
                stack.splice(i - 2, 0, x + y);
            }
            else if(oper === '-') {
                stack.splice(i - 2, 0, x - y);
            }
            else if(oper === '*') {
                stack.splice(i - 2, 0, x * y);
            }
            else {
                stack.splice(i - 2, 0, x / y);
            }
            i = 0;
        }
    }
    let screen = document.getElementById("out_screen");
    screen.textContent = stack[0];
}

// Функция clickHandler предназначена для обработки 
// событий клика по кнопкам калькулятора. 
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться 
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана 
// должно очищаться.
// По нажатию на кнопку с классом result на экране 
// должен появиться результат вычисления введённого выражения 
// с точностью до двух знаков после десятичного разделителя (точки).
// Реализуйте эту функцию. Воспользуйтесь механизмом делегирования 
// событий (https://learn.javascript.ru/event-delegation), чтобы 
// не назначать обработчик для каждой кнопки в отдельности.
function clickHandler(event) {

    if(event.target.className !== 'digits' && event.target.className !== 'other') {
        if (event.target.className === 'key_digit') { 
            let screen = document.getElementById("out_screen");
            screen.textContent = screen.textContent + event.target.textContent;
        }
        else if (event.target.className === 'key_clear_1') { 
            let screen = document.getElementById("out_screen");
            screen.textContent = "";
        }
        else if (event.target.className === 'key_clear_2') { 
            let screen = document.getElementById("out_screen");
            screen.textContent = screen.textContent.replace(/.$/, "");
        }
        else if (event.target.className === 'key_result') { 
            let screen = document.getElementById("out_screen");
            evaluate(screen.textContent);
        } 
        else {
            let screen = document.getElementById("out_screen");
            screen.textContent = screen.textContent + event.target.textContent;
        } 
    }
    
};
    


// Назначьте нужные обработчики событий.
window.onload = function () {
    let digits = document.getElementById("digits");
    let other = document.getElementById("other");
    digits.addEventListener("click", function(event){
        clickHandler(event);
    })
    other.addEventListener("click", function(event){
        clickHandler(event);
    })
}




