<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand" style="font-size: 40px">مركز بيبي كير</a>                
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> عربة التسوق</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> الاعدادات</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> خروج</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user" style="font-size: 25px"></span>تسجيل دخول جديد</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="font-size: 25px"></span> دخول</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>