<?php
      $number1=10;
      $number2=11;
      $number3=12;
      if($number1>$number2 && $number1>$number3){
        echo $number1;
      }
      else{
        if($number2>$number1 && $number2>$number3){
          echo $number2;
        }
        else
          echo $number3;
      }
?>