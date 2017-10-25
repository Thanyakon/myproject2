<?php

//--MyGPA
$name = "ธันยกร  แสงจันทร์";
$score = 72;
     
    if( $score >= "80" )

{
        echo "$name Grade A";
     
    } else if( $score >= "75" )
   {
      echo "$name Grade B+";
     
    } else if( $score >= "70" )
   {
        echo "$name Grade B";
     
    } else if( $score >= "65" )
    {
        echo "$name Grade C+";
     
    }else if( $score >= "60" )
   {
        echo "$name Grade C";
     
    }else if( $score >= "55" )
   {
        echo "$name Grade D+";
     
    }else if( $score >= "50" )
   {
        echo "$name Grade D";
     
    }else
   {
        echo "$name Grade F";
     
    }

	?>