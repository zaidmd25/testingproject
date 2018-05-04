<html>
   
   <head>
      <title>Writing PHP Function with Parameters</title>
   </head>
   
   <body>
   
      <?php
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
         }
         
         $return = addFunction(10, 20);
         echo " the added value is $return <br />";
         print time();
      ?>
      
   </body>
</html>