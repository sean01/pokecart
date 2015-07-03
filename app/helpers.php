<?php 

function url($url){
	return dirname($_SERVER['PHP_SELF']).'/'.$url; 
}

function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  $breakpoint = strpos($string, $break, $limit);

  if(false !== $breakpoint) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}

