<html>
  <head>
  </head>
  <body>
    <b>This is not coming from server</b>

    <?php

      echo "<br>This is from PHP code<br>";

      function test()
      {
        $var1 = 4;
        $var1++;
        return $var1;
      }

      echo "The result from the function is ".test();
      echo "Another print";
    ?>

  </body>
</html>