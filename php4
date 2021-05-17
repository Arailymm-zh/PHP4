<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP 4</title>
 </head>
<body>

<?php

   setcookie(plus(), getValueCookie());

   function plus(){

      if (isset($_COOKIE['test'])) {
         return 'test' . getValueCookie();
      } else {
         return 'test';
      }
   }

   function getValueCookie(){

      if (!isset($_COOKIE['test'])) {
         return 0;
      }

      return end($_COOKIE) + 1;
   }

   print_r($_COOKIE);

?>

</body>
</html>
