<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="./style.css"/>
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">

</head>
<body>
    
    <div class="flex-container">

        <div class="header">  
            <p>
               <?php echo $name, ' ', $surname . '<br>';?>    
            </p> 
                 
               <?php include 'menu.inc.php' ?>   
            
        </div>       
     
        <div class="about_me">

            <div class="greeting">
                <h2>  <?php  echo $p  ?> </h2>
            </div>
         
            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="./img/photo_2.jpg">'; ?>                    
                </div>

                <div class="fullname">

                    <p> <?php echo $name, ' ', $surname . ',',' ';
                    echo 'город', ' ', $city; ?> </p>
                      
                    <h1>  <?php  echo $prof  ?> </h1>
                    <p><a href="#"> Мои проекты ></a></p>
                </div>
            </div>

            <div class="knowledge">
                
                <div class="learning">
                    <h4>Языки: </h4>            
                        <?php  include 'knowledge.inc.php'; ?>
                        <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                        <?php   echo $d, ' ', $e, ' ', $c; ?> <br>
                </div>

                <div class="learning">      
                    <h4>Остальной освоенный материал:</h4>
                        <?php
                            $ver = 30;
                            $but = 20;
                            
                            $other_sum = $ver + $but;
                            echo $other_sum;
                            echo $c;
                        ?>   <br>  
                </div>   
                
                <div class="learning">
                    <h4>Осталось освоить(%): </h4>
                        <?php
                            echo $sum;
                        ?> 
                </div>

            </div>

            <div class="article">
                <p class="text">
                    <h2>Обо мне</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'projects.inc.php' ?>

            <?php include 'write_me.inc.php' ?>

            <?php include 'footer.inc.php' ?>

    </div>

</body>
</html>
