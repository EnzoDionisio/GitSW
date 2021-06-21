  <?php
  //error_reporting(E_ALL);
  $a=1;
  $b=7;
  $c=-13;




          function baskara($a, $b, $c){
  $delta = ($b * $b) - (4 * $a * $c);
       if($delta < 0){
           echo "Delta é menor que 0, portanto não há raízes" . "<br />";

           echo "Valor do Delta: $delta";
  }
      elseif($delta == 0){
           echo "Delta é igual à 0, portanto as raízes são iguais:" . "<br />";

  $x = (-($b)) / (2 * $a);
            echo "x': $x
                  x'': $x" . "<br />";

            echo "Valor do Delta: $delta";
  }
      else{ echo "Delta é maior que 0, portanto há duas raízes diferentes:" . "<br />";
  $x1 = intval( -($b) + sqrt($delta) / 2 * $a);
  $x2 = intval(-($b) - sqrt($delta) / 2 * $a);
           echo "x': $x1 <br />
                 x'': $x2" . " <br />";

          echo "Valor do Delta: $delta";
  }
  }

          baskara($a, $b, $c);



 ?>
