<html>
  <head>
    <style>
     .grass{
    width: 128px;
    height: 128px;
    background-image: url(ziemia.png);
    position: absolute;

    }
       .woda{
        width: 128px;
        height: 128px;
        background-image: url(woda.png);
        position: absolute;
      }
      .sand{
        width: 128px;
        height: 128px;
        background-image: url(piasek.png);
        position: absolute;
      }
    </style>
  </head>
  <body>
    <?php 
      for($i = 0; $i < 10; $i++)
      for($j = 0; $j < 10; $j++){
        echo '<div class=grass style="top: ' . (500+$j*28 + $i*28) . 'px; left: ' . (900 + $j*56-$i*56). 'px;"> </div>';
        
        if($j == 5)
        echo '<div class=woda style="top: ' . (500+$j*28 + $i*28) . 'px; left: ' . (900 + $j*56-$i*56). 'px;"> </div>';
        if($j == 4)
        echo '<div class=sand style="top: ' . (500+$j*28 + $i*28) . 'px; left: ' . (900 + $j*56-$i*56). 'px;"> </div>';
        if($j == 6)
        echo '<div class=sand style="top: ' . (500+$j*28 + $i*28) . 'px; left: ' . (900 + $j*56-$i*56). 'px;"> </div>';
      }
        ?>
 
  </body>
</html>