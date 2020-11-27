<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>مستلزمات الاطفال</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>نحن نبيع</h1>
                       <p>خصم ثابت 40٪ على جميع الماركات المتميزة...</p>
                       <a href="products.php" class="btn btn-danger">تسوق الان</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php"> <img src="img/game.jpg" width="300" height="300" alt="game">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">الالعاب</p>
                                        <p>اختر من بين أفضل ما هو متاح في الموقع</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/2/101.jpg" alt="Watch" width="200" height="300">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">الاحذية</p>
                                    <p>احذية أصلية من أفضل الماركات</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/2/8.jpg" alt="Shirt" width="190" height="300">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">الملابس</p>
                                   <p>مجموعتنا الرائعة من الملابس</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               
               </div>
           </footer>
        </div>
    </body>
</html>


