<html>
  <head>
    <title>PHP Test</title>
  <style>
  .grass{
    width: 128px;
    height: 128px;
    background-image: url(ziemia.png);
    position: absolute;
  }
  .drewno{
    width: 128px;
    height: 128px;
    background-image: url(drewno.png);
    position: absolute;
  }
  .liscie{
    width: 128px;
    height: 128px;
    background-image: url(liscie.png);
    position: absolute;
  }
  </style>
  </head>
  <body>
    
    <?php 

      for($i = 0; $i < 10; $i++)
      for($j = 0; $j < 10; $j++){

        echo '<div class=grass style="top: ' . (500+$j*(28) + $i*28) . 'px; left: ' . (900 + $j*(56)-$i*56). 'px;"> </div>';

        if($i == 5)

        echo '<div class=drewno style="top: ' . (500+$j*(-36) + $i*(38)) . 'px; left: ' . (900 + $j*(0)-$i*0). 'px;"> </div>';         
    
      }
      for($a = 0; $a < 5; $a++)
      for($b = 0; $b < 5; $b++){

        echo '<div class=liscie style="top: ' . (250+$b*(28) + $a*(28)) . 'px; left: ' . (900 + $b*(56)-$a*56). 'px;"> </div>';

      }
      for($q = 0; $q < 3; $q++)
      for($w = 0; $w < 3; $w++){

        echo '<div class=liscie style="top: ' . (270+$w*(28) + $q*(28)) . 'px; left: ' . (900 + $w*(56)-$q*56). 'px;"> </div>';

      }
      for($f = 0; $f < 1; $f++)
      for($g = 0; $g < 1; $g++){

        echo '<div class=liscie style="top: ' . (290+$g*(28) + $f*(28)) . 'px; left: ' . (900 + $g*(56)-$f*56). 'px;"> </div>';

      }
      

    ?>

  </body>
</html>