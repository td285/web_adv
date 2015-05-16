<?php
session_start();

if( isset( $_SESSION['valid'] ) ) {
   if( $_SESSION['valid'] !== TRUE )
      header( "Location: ./index.php" );
}
else
   header( "Location: ./index.php" );

require_once "includes/db.php";

// $filepath = select( "path", "file", "username", $_SESSION['username'] );
// $filename = select( "name", "file", "username", $_SESSION['username'] );
$username = select( "username", "user", "username", $_SESSION['username'] );

$links = get_all_file_links_for( $_SESSION['username'] );
$amount_of_links = count( $links );

?>
<!DOCTYPE HTML>
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
      <section id="upload">
      <p><a href="./logout.php">Logout</a></p>
      <p>Hello, <strong><?php echo $username; ?></strong>. Continue Shopping??</p>
      <dl>
<?php
   for( $index = 0; $index < $amount_of_links; $index++ )
      echo "         <dd><a href=\"uploads/$links[$index]\">$links[$index]</a></dd>\n";
?>
      </dl>
         <form method="post" action="upload.php" enctype="multipart/form-data">
            <p><input type="file" name="document"></p>
            <p><input type="submit" id="send_file" value="Send File"></p>
         </form>
      </section>
      </div>
   </body>
</html>
