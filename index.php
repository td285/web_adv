<?php
session_start();

if( isset( $_SESSION["valid"] ) )
   if( 1 == $_SESSION["valid"] )
      header( "Location: home.php" );

if( !isset( $_GET['action'] ) ) {
   $_GET['action'] = "register";
   header( "Location: ./index.php?action=". $_GET['action'] );
}

include "includes/main.php";

if( isset( $_GET['action'] ) )
   if( "login" == $_GET['action'] ) {
      $action_value = "login.php";
      $subheading = $button_value = "Login";
   }
   else
      if( "register" == $_GET['action'] ) {
         $action_value = "register.php";
         $subheading = $button_value = "Register";
      }
?>

<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<title>INVENTORY | SHOP </title>
<link rel="stylesheet" type="text/css" href="./css/stylesheet2.css"> 
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/MooTools-Core-1.5.1.js"></script>
<style type="text/css">
</style>

</head>

   <body>
      <div class="top">
         <div class="header">
         <a href="index.html">INVENTORY</a>
         </div>

         <div class="menu">
         <a href="index.html">COLLECTIONS</a>
         <br>
         <a href="shop.html">SHOP</a>
         <br>
         <a href="index.php">LOGIN</a>
         <br>     
         <a href="contact.html">CONTACT</a>
         <br>
         </div>   
      </div>

      <div class="navigation">
         <ul>
            <li><a href="">SPRING//SUMMER</a>
               <br>
               <li><a href="">AUTUMNN//WINTER</a>
               <br>
            </li>
         </ul> 
      </div>

      <div class="seasons">
         <ul>
            <a href="index.html">ME<br>NS</a>
            <br>
            /  /
            <br>
            <a href="womens.html">WM<br>NS</a>
            <br>
         </ul>
      </div>



        <div id="content">
          <div class="login">
            <header>
               <p><?php echo $subheading ?></p>
            </header>

            <form action="<?php echo $action_value; ?>" method="post">
               <p><input type="text" name="username" placeholder="username" required autofocus></p>
               <p><input type="password" name="password" placeholder="password" required autofocus></p>



               <p><input type="hidden" name="submitted" value="1"></p>
               <p><input type="submit" value="<?php echo $button_value; ?>"></p>
            </form>
            <p>Would you like to <a href="./index.php?action=register">register</a> or <a href="./index.php?action=login">login?</a></p>
         </div>
       </div>

      <div class="footer">
         <p>A division of Free International Design © 2015. All rights reserved.</p>
      </div>

   </body>

</html>



