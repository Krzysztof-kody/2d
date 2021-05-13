<style>
    .box{
        background-image: url(zdj_piksel/trawa.png);
        height:32px;
        width:32px;
        position:absolute;
    }
    </style>

    
    <?php
    $left = 300;
    for($i = 0; $i <20; $i++){
        for($j = 0; $j < 50; $j++){
            if($i!=10&&$j!=20)
            echo '<div class = box style="top:' . ($j*6 + $i*8) . 'px; left:' . ($left + $$j*23 - $i*11) . 'px;"> </div>';
            echo "\n";
        }
    }
    ?>