<?php

 include 'tag.php';

 define("NEWLINE", "<br>" ); 
 define("NO_INFO","no extra") ; 
 define("DOCTYPE","<!DOCTYPE html>");


 $html = new Tag('html',true);
 $head = new Tag('head',true);
 $body = new Tag('body',true);
 
 $html->add_attr(array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"));
 $html->add_body('asd',asd);
 #$html->add_body($head,true);
 $html->commit();

 echo $html->display();

?>
