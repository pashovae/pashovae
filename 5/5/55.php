<?php
  if(isset($_GET['ident'])){
    $ident=$_GET['ident'];
  }
  else{
    die('введите параметр');
  }
  
  if(empty($ident)){
    die('пустая строка');
  }
  
  if(!ctype_alpha($ident[0])){
    die('Последовательность не идентификатор');
  }
  
  for($i=1; $i<strlen($ident); $i++){
    if(!ctype_alnum($ident[i])){
       die('no');
    }
  }
  echo('yes');

?>
