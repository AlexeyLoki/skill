<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of the rising sun</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $greating  ?> </h1>

            <div class="data">

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $firstname, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Поменяли текст, добавлили немного рандомизации и условие</p>
                    <p> Это параграф с текстом  </p>
                    <p> Тут тоже текст </p>
                </div>
                <div class="knowledge">
                                   
                                   <?php  include 'knowledge.inc.php'; ?>
                                   <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                                      
                                   <?php
                                       $a = rand(1,1000);
                                       $b = rand(1,1000);
                                       $c = $a + $b;
                                       echo $a,'+',$b,'=',$c;
                                   ?>   <br>                
                                    <?php
                                       echo $price, ' ', $d;
                                   ?> 
               
                           </div>
            </div>



            <div align='center', class="article">
                <p class="text">
                Солнца нежного в ладошку<br>
                Соберу я для тебя,<br>
                Но тепла его немножко<br>
                Я оставлю для себя.<br>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
