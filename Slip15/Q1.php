<!-- Write a PHP script to check number 153 is Armstrong or not. -->

<?php
      $num = 133;
      $sum = 0;
      $temp = $num;

      while($temp!=0){
            $remainder = $temp%10;
            $sum = $sum+pow($remainder,3);
            $temp = intval($temp/10);
      }

      if($num == $sum){
            echo "$num is an Armstrong Number.";
      }
      else{
            echo "$num is not an Armstrong Number.";
      }
?>