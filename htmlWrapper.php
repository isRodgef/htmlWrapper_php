<?php

 include('./tag.php');

 define("NEWLINE", "<br>" ); 
 define("NO_INFO","no extra") ; 
 define("DOCTYPE","<!DOCTYPE html>");


 $html = Tag('html',true);
 $head = Tag('head',true);
 $body = Tag('body',true);
 
 $html->add_body($head,false);
 $html->commit();
 echo $html->display();

?>
