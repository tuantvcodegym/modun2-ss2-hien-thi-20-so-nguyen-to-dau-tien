<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    function hienThiSNT(){
        $count = 0;                 //bien count dung de dem so luong SNT can duoc in ra
        $number = 20;
        $n = 2;                     //bien n dung de kiem tra xem n co phai la SNT hay khong
        while ($count < $number){
            if(kiemTra($n)){
                echo $n . '<br>';
                $count++;           //neu la SNT thi in ra n va tang count len 1.
            }
            $n++;                   //tang n len 1 va kiem tiep tuc kiem tra.
        }
    }
    function kiemTra($number){
        $check = true;
        if($number < 2){
            $check = false;
        }else{
            for($i=2; $i<$number; $i++){
                if($number %$i == 0){
                    $check = false;
                }
            }
        }
        return $check;
    }
    hienThiSNT()
?>
</body>
</html>