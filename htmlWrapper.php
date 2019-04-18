<?php

 include 'tag.php';

 define("NEWLINE", "<br>" ); 
 define("NO_INFO","no extra") ; 
 define("DOCTYPE","<!DOCTYPE html>");


 $html = new Tag('html',true);
 $head = new Tag('head',true);
 $body = new Tag('body',true);
 
 $html->add_body($head,true);
 $html->commit();

 echo $html->display();

?>
