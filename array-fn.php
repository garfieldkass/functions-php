<?php
// array functions



// create (small) array from string, spending less characters in main code
// ex: $array=arr('word1 word2 word3');
function arr($s, $delimiter=' ')
{
  return explode($delimiter, $s);
}

// array_reduce for strings
// example usage: 
// $options=array_reduce_str ( file($opt_list), function($s) { return "<option value='$s'>$s</option>\n"; } );
function array_reduce_str($arr,$fn)
{
  $result='';
  foreach ($arr as $item) $result.=$fn(trim($item));
  return $result; 
}


