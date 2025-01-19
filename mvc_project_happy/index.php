<?php

    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller =$_GET['controller'];
        $action =$_GET['action']  ;
    }
    else
    {
        $controller ='pages';
        $action = 'home';
    }
?>

    <!DOCTYPE html>
    <html>
    <head><title> 🌈💕 HappyNewYear ✨🌟</title></head>
    <link rel="icon" href="https://firebasestorage.googleapis.com/v0/b/testpoonnawit.appspot.com/o/1f033688cfaf34a7e1ed8f42014e9b85.jpg?alt=media&token=f29677a5-ddee-4cf6-a6a2-ef952c037ec8" type="image/x-icon">

   
    <body>

           
            
            <?php require("routes.php"); ?>
            


            

    </body>

    </html>

