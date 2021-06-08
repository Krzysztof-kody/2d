<style>
    .box{
        background-color: red;
        position: relative;
        width: 20px;
        height: 20px;
        margin-left: 3px;
        margin-top: 3px;
        float:left;
    }
    .box1{
        background-color: blue;
        position: relative;
        width: 20px;
        height: 20px;
        margin-left: 3px;
        margin-top: 3px;
        float:left;
    }
</style>

<?php
for($a=0;$a<4;$a++){
  for($i = 0; $i < 4; $i++)
    {
        echo "<div class= box> </div>";
        echo "<div class= box1> </div>";
    }
    echo "<br />";
    for($i = 0; $i < 4; $i++)
    {
        echo "<div class= box> </div>";
        echo "<div class= box1> </div>";
    }
    echo "<br />";
}
?>