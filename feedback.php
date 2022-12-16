<!DOCTYPE html>
<html lang="ru">
<?php	
	include 'header.html';
  ?>

<body>


    <main>
        <div class="container"><form method = "post" action = "home.php">
            <p><b>Ваше имя:</b>
            <input type ="text" size="40" name = "name" 
            value = "<?php if (isset($_GET['name'])){echo $_GET['name']; }?>"/> </p>

            <p><b>Ваша почта:</b>
            <input type ="text" size="40" name = "email" placeholder="email" 
            value = "<?php if (isset($_GET['email'])){echo $_GET['email']; }?>"/></p>  

            <p><b>Откуда вы о нас узнали?</b><br>
            <!--
                 <input type="radio" id="contactChoice1" name="source1" value="1" 
                 <--?php if (isset($_GET['source1']) & $_GET['source1']='1'){
                        echo 'checked';}?>/>
                <label for="contactChoice1">Реклама в интернете</label>
                <input type="radio" id="contactChoice2" name="source2" value="2" 
                <--?php if (isset($_GET['source2']) & $_GET['source2']='2'){
                        echo 'checked';}?>/>
                <label for="contactChoice2">Реклама на радио</label>
                <input type="radio" id="contactChoice1" name="source3" value="3" 
                <--?php if (isset($_GET['source3']) & $_GET['source3']='3'){
                        echo 'checked';}?>/>
                <label for="contactChoice3">Через знакомых</label>
            --> 
            <input type="radio" id="contactChoice1" name="source" value="1" <?php if (isset($_GET['source']) & $_GET['source']='1'){
                        echo 'checked';}?>/>
              <label for="contactChoice1">Реклама в интернете</label>
              <input type="radio" id="contactChoice2" name="source" value="2" <?php if (isset($_GET['source']) & $_GET['source']='2'){
                        echo 'checked';}?>/>
              <label for="contactChoice2">Реклама на радио</label>
             
        
            </p>

            <p><select size="1" name = 'category' style="width: 150px">
              <option disabled>Выберите опцию</option>
              <option value="1">Предложение</option>
              <option value="2">Жалоба</option></select></p>

            <p><b>Текст сообщения: </b><br></p>
            <p><textarea name = 'message' rows = "5" cols = 45></textarea></p>

            <p><b>Вложение:</b></p>
            <p><input type = "file" name = "attachment"></p>    

            <center>
            <p><b><legend> Согласие на обработку персональных данных</legend></b>
            <input type="checkbox" name = "check">Я даю согласие</p>
            </center>

            <p><input type = "submit" value = "Отправить"></p>


        </form></div>

     
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>