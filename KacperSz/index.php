
<style>
    .box{
        background-color: red;
        position: relative;
        width: 20px;
        height: 20px;
        float: left;
        margin-left: 1px;
    }
    .box1{
        background-color: red;
        position: relative;
        width: 20px;
        height: 20px;
        margin-bottom: 1px;
    }
</style>

<?php
    for($i = 0; $i < 9; $i++)
    {
        for($a = 0; $a < 9; $a++)
        {
            echo "<div class= box> </div>";
        }
        echo "<div class= box1> </div>";
    }
?>