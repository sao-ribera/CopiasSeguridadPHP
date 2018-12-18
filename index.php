<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>GitHub</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!-- Including the Lobster font from Google's Font Directory -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
        <!-- Enabling HTML5 support for Internet Explorer -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

        <header>
            <h1>Pruebas con GitHub</h1>
           
        </header>
        
        <nav>
            <ul class="fancyNav">
                <li id="home"><a href="#home" class="homeIcon">Home</a></li>
                <li id="news"><a href="#news">Copia Seguridad</a></li>
                <li id="about"><a href="#about">Rest.Copia</a></li>
               
                <li id="contact"><a href="#contact">Salir</a></li>
            </ul>
        </nav>
        
        
         <?php
        echo'<from action = "RealizarCopia.php>" method = "POST">
         
        
        Solo una BD
        <input type="radio" name="rbcopia" value="0" checked="checked"/> 
        
        <br>

        Todas las BD 

        <input type="radio" name="rbcopia" value="0" /><input type="text" name="text" value="" />
        
        <br>

        <input type="submit" value="Realizar" name="realizar"/>


        </form>';
        ?>
        
        
        <footer></footer>
            
    </body>
</html>
