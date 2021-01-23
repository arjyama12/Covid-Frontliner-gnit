<?php
if(isset($_POST['submit']))
{
    $q1=$_POST['questioni'];
    $q2=$_POST['questionii'];
    $q3=$_POST['questioniii'];
    $q4=$_POST['questioniv'];
    $q5=$_POST['questionv'];
    $i=0;

    if($q1=="1")
    {
        $i=$i+1;
    }

    if($q2=="1")
    {
        $i=$i+1;
    }

    if($q3=="1")
    {
        $i=$i+1;
    }
    if($q4=="1")
    {
        $i=$i+1;
    }
    if($q5=="1")
    {
        $i=$i+1;
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            margin-top: 258px;
    width: 250px;
    margin-left: 120px;
        }
        h2{
            margin-left: 120px;
            font-size:50px; 
        }

    </style>
</head>
<body>
<?php
    if($i>=4){
       ?><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c4b9.png" alt="">
        <h2>High Chance</h2>
<?php        
    }
    if($i>=2){
    ?>    <img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Emoji_Icon_-_Worried_Emoji_large.png?v=1571606113" alt="">
        <h2>Mid Chance</h2>
<?php    }
    if($i<=1){
?>        <img src="https://i.pinimg.com/originals/d5/9c/90/d59c9002030448f1193adf7d7600a52a.png" alt="">
        <h2>Low Chance</h2>
        <?php   }?>
</body>
</html>