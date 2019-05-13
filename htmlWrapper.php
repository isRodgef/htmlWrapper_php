<?php

 include 'tag.php';

 define("NEWLINE", "<br>" ); 
 define("NO_INFO","no extra") ; 
 define("DOCTYPE","<!DOCTYPE html>");
 define("AMPERSAND","&amp");
 define("LT","&lt");
 define("GT","&gt");


 $html = new Tag('html',true);
 $head = new Tag('head',true);
 $body = new Tag('body',true);
 
 #$html->add_attr(array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"));
 #$html->add_body('asd',false);
 $head->add_body('asd',false);
 $head->commit();
 $html->add_body($head,true);
 

 $body->commit();
 
 
 $html->add_body($body,true);  
 $html->commit();


  ###commit function not appending >




 #echo $head->display();
 echo $html->display();

?>
