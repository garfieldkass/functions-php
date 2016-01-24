<?php

function explode_tok($delims,$str) // explode() with delimiters like in strtok()
{
  $str1=strtok($str,$delims);
  $ret=array();
  while (!empty($str1)) do  // alternatively while (strlen($str1) > 0)
   {
    $ret[]=$str1;
    $str1=strtok($delims);
   }
 return $ret;
}

